<?php

class ManageProductsController extends BController {

	public $layout = '//layouts/main';
	public function actionView($id) {
		//dump($this->loadModel($id, 'Product'));exit;
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Product'),
		));
	}

	public function actionCreate() {
		$model = new Product;
		$modelCategories = ProductCategory::model()->findAll(array('order'=>'lft ASC'));
		//$modelMiddle = new ProductsMiddle;
		if (isset($_POST['Product'])) {
			$model->setAttributes($_POST['Product']);

			if(empty($_POST['ProductMiddle']['category_id'])){
				$model->addError('categories', "Don't know category(ies) ");
			}else {
				dump(CUploadedFile::getInstance($model, 'image'));exit;
				$fileUpload = CUploadedFile::getInstance($model, 'image');
				//dump(CUploadedFile::getInstance($model, 'image'));exit;
				if (isset($fileUpload)) {
					$uploadPath = YiiBase::getPathOfAlias('webroot') . Yii::app()->controller->module->image['url']; 
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
							->resize(Yii::app()->controller->module->image['thumbnail']['width'], 
											 Yii::app()->controller->module->image['thumbnail']['height']
											)
							->save('thumb_'.$filename);
					$model->image = $filename;
					if ($model->save()) {
						foreach ($_POST['ProductMiddle']['category_id'] as $value){
							$middle = new ProductMiddle;
							$middle ->category_id=$value;
							$middle ->product_id=$model->id;
							if (!$middle->save())
								throw new Exception('Can not create product');
						}
						if (Yii::app()->getRequest()->getIsAjaxRequest())
							Yii::app()->end();
						else
							$this->redirect(array('view', 'id' => $model->id));
					}
				}
			}
		}
		$this->render('create', array( 
			'modelCategories'=>$modelCategories,
			'model' => $model,
		
		));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Product');
		$catIdsBelongTo = array();
		$modelCategories = ProductCategory::model()->findAll(array('order'=>'lft ASC'));
		if (isset($_POST['Product'])) {
			$model->setAttributes($_POST['Product']);
			$fileUpload = CUploadedFile::getInstance($model, 'image');
			if (isset($fileUpload)) {
					$uploadPath = YiiBase::getPathOfAlias('webroot') . Yii::app()->controller->module->image['url'];
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
					->resize(Yii::app()->controller->module->image['thumbnail']['width'],
							Yii::app()->controller->module->image['thumbnail']['height']
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
					$model->image = $filename;
			}
			if ($model->save()) {
				if(empty($_POST['ProductMiddle']['category_id'])){
					//$model->addError('categories', "Don't know category(ies) ");
				} else{
					//dump ($_POST['NewsMiddle']['category_id']);exit ;
					$ProductMiddle=ProductMiddle::model()->deleteAll('product_id=:id',array(':id'=>$model->id));
					foreach ($_POST['ProductMiddle']['category_id'] as $value){
						$middle = new ProductMiddle;
						$middle ->category_id=$value;
						$middle ->product_id=$model->id;
						if (!$middle->save())
							throw new Exception('Can not create product');
					}
				}
				$this->redirect(array('view', 'id' => $model->id));
				
			}else{
					$catsBelongTo = ProductMiddle::model()->findAllByAttributes(array('product_id'=>$id));
					//$catIdsBelongTo = array();
					foreach ($catsBelongTo as $row){
						$catIdsBelongTo[] = $row->category_id;
					}
			}
		}
		
		//dump ($modelCategories);exit;
		
		$this->render('update', array(
			'model' => $model,
			'catIdsBelongTo' =>$catIdsBelongTo,
			'modelCategories'=>$modelCategories,
		));
	}

	public function actionDelete($id) {
		//echo 'kkk';exit ;
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			//echo $this->loadModel($id)->delete(); exit;
			$model=$this->loadModel($id);
			$image=$model->image;
			if ($this->loadModel($id)->delete()){
				$middle=ProductMiddle::model()->deleteAll('product_id=:id',array(':id'=>$id));
				$uploadPath = YiiBase::getPathOfAlias('webroot') . Yii::app()->controller->module->image['url'];
				if (is_file($uploadPath.'thumb_'.$image)){
					unlink($uploadPath.'thumb_'.$image);
				}
				if (is_file($uploadPath.$image)){
					unlink($uploadPath.$image);
				}
			}
			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Product');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Product('search');
		$model->unsetAttributes();

		if (isset($_GET['Product']))
			$model->setAttributes($_GET['Product']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	
	public function actionProductsInCategory($category_id) {
		$model = new Product('searchByCategory');
		$model->unsetAttributes();

		if (isset($_GET['Product']))
			$model->setAttributes($_GET['Product']);

		$this->render('admin_category', array(
			'model' => $model,
			'category_id' =>$category_id,
		));
	}
	
	public function actionAjaxactive()
	{
		$id = $_GET['id'];
		//$active = $_GET['active'];
		$model=$this->loadModel($id);
		if ($model->is_published)
			$model->is_published = 0;
		else 
			$model->is_published = 1;
		if ($model->save())
			echo 'ok';
		else 
			throw new Exception("Sorry",500);
	}
	
	public function actionAjaxupdate()
	{
		$act = $_GET['act'];
		//echo $act;exit;
		if($act=='doSortOrder')
		{
			//echo 'ddd'; exit;
			$sortOrderAll = $_POST['priority'];
			if(count($sortOrderAll)>0)
			{
				foreach($sortOrderAll as $menuId=>$priority)
				{
					$model=$this->loadModel($menuId);
					$model->priority = $priority;
					$model->save();
				}
			}
		}
		else
		{
			$autoIdAll = $_POST['autoId'];
			if(count($autoIdAll)>0)
			{
				foreach($autoIdAll as $autoId)
				{
					$model=$this->loadModel($autoId);
					if($act=='doDelete'){
						$image=$model->image;
						if ($model->delete()){
							$uploadPath = YiiBase::getPathOfAlias('webroot') . Yii::app()->controller->module->image['url'];
							if (is_file($uploadPath.'thumb_'.$image)){
								unlink($uploadPath.'thumb_'.$image);
							}
							if (is_file($uploadPath.$image)){
								unlink($uploadPath.$image);
							}
						}
					}
					if($act=='doActive')
						$model->is_published = '1';
					if($act=='doInactive')
						$model->is_published = '0';                
					if($model->save())
						echo 'ok';
					else
						throw new Exception("Sorry",500);
	 
				}
			}
		}
	}
	
	
	public function loadModel($id){
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}