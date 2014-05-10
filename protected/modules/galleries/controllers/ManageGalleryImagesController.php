<?php

class ManageGalleryImagesController extends BController {

	public $layouts = '//layouts/main.php';
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'GalleryImage'),
		));
	}

	public function actionCreate() {
		$model = new GalleryImage;


		if (isset($_POST['GalleryImage'])) {
			$model->setAttributes($_POST['GalleryImage']);
			$fileUpload = CUploadedFile::getInstance($model, 'image');
			//dump($fileUpload);exit;
			if (isset($fileUpload)){
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
				$model->image = $filename;
			}
			if ($model->save()){
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}
		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'GalleryImage');


		if (isset($_POST['GalleryImage'])) {
			$model->setAttributes($_POST['GalleryImage']);
			
			//$this->controlImage($model);
			//dump ($this->controlImage($model));exit;
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
			$buffer=$this->loadModel($id, 'GalleryImage');
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
		$dataProvider = new CActiveDataProvider('GalleryImage');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new GalleryImage('search');
		$model->unsetAttributes();
		
		if (isset($_GET['GalleryImage']))
			$model->setAttributes($_GET['GalleryImage']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	public function loadModel($id)
    {
        $model = GalleryImage::model()->findByPk($id);
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