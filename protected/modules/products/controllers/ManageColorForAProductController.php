<?php

class ManageColorForAProductController extends BController {

	public $layouts ='//laysout/main.php';
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'ProductImage'),
		));
	}

	public function actionCreate($product_id) {
		$model = new ProductImage;
		$product_id=Yii::app()->request->getParam('product_id','default');

		if (isset($_POST['ProductImage'])) {
			
			$model->setAttributes($_POST['ProductImage']);
			//dump($_POST['ProductImage']);exit;
			
			$model->image= $this->controlImage($model);
			$model->product_id= $product_id;
			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 
			'model' => $model,
			'product_id' => $product_id
			));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'ProductImage');


		if (isset($_POST['ProductImage'])) {
			$model->setAttributes($_POST['ProductImage']);
			$model->image= $this->controlImage($model);
			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			//$this->loadModel($id, 'ProductImage')->delete();
			$buffer=$this->loadModel($id, 'ProductImage');
			$image=$buffer->image;
			if ($buffer->delete()){
				$uploadPath = YiiBase::getPathOfAlias('webroot') . Yii::app()->controller->module->_image['url'];
				if(is_file($uploadPath.'/'.$image)){
					unlink($uploadPath.'/'.$image);
				}
				if(is_file($uploadPath.'/thumb_'.$image)){
					unlink($uploadPath.'/thumb_'.$image);
				}
			}
			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('ProductImage');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin($product_id) {
		$model = new ProductImage('search');
		//$model->product_id = $product_id;
		$product_id=Yii::app()->request->getParam('product_id','default');
		//echo $hh;exit;
		
		//$model= ProductImage::model()->findAllByAttributes(array('product_id'=>$product_id));
		//dump ($model);exit;
		$model->unsetAttributes();
		//echo Yii::app()->controller->id; exit;
		if (isset($_GET['ProductImage']))
			$model->setAttributes($_GET['ProductImage']);
			
		$model->product_id = $product_id;
		//dump ($model);exit;
		$this->render('admin', array(
			'model' => $model,
			'product_id'=>$product_id,
		));
	}
	
	public function loadModel($id)
	{
		$model = ProductImage::model()->findByPk($id);
		if ($model === null)
		throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}
	
	public function controlImage($model){
		$fileUpload = CUploadedFile::getInstance($model, 'image');
		if (isset($fileUpload)) {
				$uploadPath = YiiBase::getPathOfAlias('webroot') . Yii::app()->controller->module->_image['url'];
				if (!is_dir($uploadPath))
					mkdir($uploadPath,0777,true);
					
				$filename = time(). $fileUpload->getName(); //time() . mt_rand(0, 0xfff) . '.' . $fileUpload->getExtensionName();
				$fileUpload->saveAs($uploadPath . $filename);
				//CVarDumper::dump($uploadPath . $filename, 3, true);	exit;
	
				//Create lager and thumbnail image
				Yii::import('ext.phpthumb.EasyPhpThumb');
				$thumbsPath = $uploadPath;
	
				// thumbnails image
				$thumbs = new EasyPhpThumb();
				$thumbs->init();
				$thumbs->setThumbsDirectory($thumbsPath);
				$thumbs->load($uploadPath . $filename)
				->resize(Yii::app()->controller->module->_image['thumbnail']['width'],
						Yii::app()->controller->module->_image['thumbnail']['height']
				)
				->save('thumb_'.$filename);
				
				try{
					if(is_file($uploadPath.'/'.$model->image)){
						unlink($uploadPath.'/'.$model->image);
					}
					if(is_file($uploadPath.'/thumb_'.$model->image)){
						unlink($uploadPath.'/thumb_'.$model->image);
					}
				}catch (Exception $err){}
				
				return $filename;
		} else return $model->image;
	}

}