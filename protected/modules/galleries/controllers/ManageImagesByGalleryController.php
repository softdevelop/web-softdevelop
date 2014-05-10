<?php
class ManageImagesByGalleryController extends Controller {

	//public $backend_left_menu = "application.modules.galleries.views.admin_menu._left_menu";
	//public $backend_left_menu_datas = array('list'	=>	array());
	//public $backend_left_menu_datas = false;
	private $_model;
	public $layout='//layouts/main';
	
	public function init()
	{
			Yii::app()->theme = 'backend';
			parent::init();
	}

	public function actionView($id) {
		$this->render('view', array(
				'model' => $this->loadModel($id, 'GalleryImage'),
		));
	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	//public function actionUpdate($gallery_id, $id)
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

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	//public function actionDelete($gallery_id, $id)
	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$model = $this->loadModel($id);
			
			//$model->gallery_id = $gallery_id;
			
			// X?a khoi db
			if ($model->delete()) 
			{
				// X?a image
				$uploadPath = YiiBase::getPathOfAlias('webroot') . '/wwwroot/upload_files/gallery_images/';
				$filename = $uploadPath . $model->image;
				if (is_file($filename)) @unlink($filename);
				$filenameThumb = $uploadPath . 'thumbs/' . $model->image;
				if (is_file($filenameThumb)) @unlink($filenameThumb);
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
		throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($gallery_id = null)
	{
		//$baseScriptUrl = Yii::app()->assetManager->publish(dirname(__FILE__) . '/../assets/galleries');
		//Yii::app()->getClientScript()->registerCssFile($baseScriptUrl.'/css/galleries.css');
		//Yii::app()->getClientScript()->registerCssFile($baseScriptUrl.'/css/jqtransform.css');
		//Yii::app()->getClientScript()->registerScriptFile($baseScriptUrl.'/js/jquery.jqtransform.js');
		//Yii::app()->getClientScript()->registerScriptFile($baseScriptUrl.'/js/galleries.js');
		if (isset($_POST['galleries-image-grid_c0'])) {
			foreach ($_POST['galleries-image-grid_c0'] as $ID)
			{
				$model = $this->loadModel($ID);
				
				$model->gallery_id = $gallery_id;

				// Xoa khoi db
				if ($model->delete() == 'true')
				{
					// X?a image
					$uploadPath = YiiBase::getPathOfAlias('webroot') . '/wwwroot/upload_files/galleries/images';
					$filename = $uploadPath . '/' . $model->image;
					if (is_file($filename)) @unlink($filename);
					$filenameThumb = $uploadPath . '/thumbs/' . $model->image;
					if (is_file($filenameThumb)) @unlink($filenameThumb);
				}
			}
		}
		$model = new GalleryImage('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['GalleryImage']))
		$model->attributes = $_GET['GalleryImage'];
		$model->gallery_id = $gallery_id;
		
		/*
		$model = new CActiveDataProvider('GalleryImage', array(
				'criteria' => array(
						'condition' => 'gallery_id = :gallery_id',
						'params' => array(':gallery_id' => $gallery_id),
						'order' => 'created DESC, priority ASC',
				),
				'pagination'=>array(
					'pageSize'=>Yii::app()->controller->module->entriesAlbumShowGrid
        ),
		));
		*/
		$this->render('admin', array(
			'model' => $model,
		));
	}
	
	public function actionAjaxactive(){
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
	
	public function actionAjaxupdate(){
		$act = $_GET['act'];
		//echo $act;exit;
		if($act=='doSortOrder')
		{
			$sortOrderAll = $_POST['sortOrder'];
			if(count($sortOrderAll)>0)
			{
				foreach($sortOrderAll as $menuId=>$sortOrder)
				{
					$model=$this->loadModel($menuId);
					$model->sortOrder = $sortOrder;
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
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model = GalleryImage::model()->findByPk($id);
		if ($model === null)
		throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'galleries-image-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}