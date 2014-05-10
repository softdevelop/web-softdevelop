<?php

class ManageBannersController extends BController {

	public $layout ='//layouts/main';
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Banner'),
		));
	}

	public function actionCreate() {
		$model = new Banner;


		if (isset($_POST['Banner'])) {
			$model->setAttributes($_POST['Banner']);
			//dump($model);exit;
			$fileUpload = CUploadedFile::getInstance($model, 'image');
			//dump(CUploadedFile::getInstance($model, 'image'));exit;
			if (isset($fileUpload)) {
				list($width, $height, $type, $attr) = getimagesize($fileUpload->getTempName());
				if($width != $this->module->image['width'] 
						|| $height != $this->module->image['height']){
					$model->addError('image', 'Banner must match with the size: '
							.$this->module->image['width']
							.'x'.$this->module->image['height'].' pixel.');
				}else{
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
						if (Yii::app()->getRequest()->getIsAjaxRequest())
							Yii::app()->end();
						else
							$this->redirect(array('view', 'id' => $model->id));
					}
				}
			}else{
				$model->addError('image', 'Image banner is emptyss.');
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Banner');
		$buffer=$model->image;
		if (isset($_POST['Banner'])) {
			//dump($_POST['Banner']);exit;
			$model->setAttributes($_POST['Banner']);
			$fileUpload = CUploadedFile::getInstance($model, 'image');
			if (isset($fileUpload)) {
				list($width, $height, $type, $attr) = getimagesize($fileUpload->getTempName());
				if($width != $this->module->image['width']
						|| $height != $this->module->image['height']){
					$model->addError('image', 'Banner must match with the size: '
							.$this->module->image['width']
							.'x'.$this->module->image['height'].' pixel.');
				}else{
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
			}
			//echo $model->save().'cc';exit;
			//dump($model);exit;
			/*if(empty($model->image)){
				$model->_attributes->image=$buffer;
			}
			dump ($model);exit; */
			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
			//echo 'ddd';exit;
		}
		$this->render('update',array('model' => $model));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$model=$this->loadModel($id, 'Banner');
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

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Banner');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Banner('search');
		$model->unsetAttributes();

		if (isset($_GET['Banner']))
			$model->setAttributes($_GET['Banner']);

		$this->render('admin', array(
			'model' => $model,
		));
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
					/*if($act=='doActive')
						$model->isActive = '1';
					if($act=='doInactive')
						$model->isActive = '0'; */                  
					if($model->save())
						echo 'ok';
					else
						throw new Exception("Sorry",500);
	 
				}
			}
		}
	}
	
	public function loadModel($id)
    {
        $model = Banner::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

}