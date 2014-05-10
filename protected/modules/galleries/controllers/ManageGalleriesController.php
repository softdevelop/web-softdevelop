<?php

class ManageGalleriesController extends BController {

	public $layouts = '//layouts/main.php';
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Gallery'),
		));
	}

	public function actionCreate() {
		$model = new Gallery;


		if (isset($_POST['Gallery'])) {
			$model->setAttributes($_POST['Gallery']);
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
			}
			if ($model->save()) {
					if (Yii::app()->getRequest()->getIsAjaxRequest())
						Yii::app()->end();
					else
						$this->redirect(array('view', 'id' => $model->id));
				}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Gallery');


		if (isset($_POST['Gallery'])) {
			$model->setAttributes($_POST['Gallery']);
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
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			//echo $this->loadModel($id)->delete(); exit;
			$model=$this->loadModel($id);
			$image=$model->image;
			if ($this->loadModel($id)->delete()){
				//$middle=GalleryImage::model()->deleteAll('product_id=:id',array(':id'=>$id));
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
		$dataProvider = new CActiveDataProvider('Gallery');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Gallery('search');
		$model->unsetAttributes();

		if (isset($_GET['Gallery']))
			$model->setAttributes($_GET['Gallery']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	
	public function actionAjaxactive()
	{
		echo 'dd';
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
	
	public function actionUpdateTarget()
	{
		echo "ccc";
	}
	public function loadModel($id)
    {
        $model = Gallery::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
}