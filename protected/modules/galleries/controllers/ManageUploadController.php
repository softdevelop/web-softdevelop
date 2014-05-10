<?php

/**
 * UploadController - Controller dùng để upload image
 * 
 * @author huytbt
 * @date 2011-07-11
 * @version 1.0
 */
class ManageUploadController extends Controller
{
	private $_model;
	public $layout='//layouts/main';
	
	public function init()
	{
			Yii::app()->theme = 'backend';
			parent::init();
	}

	/**
	 * actionIndex - Action dùng để render ra form upload
	 */
	public function actionIndex($gallery_id)
	{
			//$baseScriptUrl = Yii::app()->assetManager->publish(dirname(__FILE__) . '/../assets/galleries');
			//Yii::app()->getClientScript()->registerCssFile($baseScriptUrl.'/css/galleries.css');
			$assets = dirname(__FILE__) . '/../assetsUpload';
			$baseUrl = Yii::app()->assetManager->publish($assets);
			if (is_dir($assets)){
							//Yii::app()->clientScript->registerCssFile(Yii::app()->clientScript->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');
				Yii::app()->clientScript->registerCssFile($baseUrl.'/css/jquery.fileupload.css');
				Yii::app()->clientScript->registerCssFile($baseUrl.'/css/jquery.fileupload-ui.css');
				//Yii::app()->clientScript->registerCssFile($baseUrl.'/css/jquery.fileupload-noscript.css');
				//Yii::app()->clientScript->registerCssFile($baseUrl.'/css/jquery.fileupload-ui-noscript.css');
				//Yii::app()->clientScript->registerCoreScript('jquery.ui');
				
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/vendor/jquery.ui.widget.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/tmpl.min.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/load-image.min.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/canvas-to-blob.min.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.blueimp-gallery.min.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.iframe-transport.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.fileupload.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.fileupload-process.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.fileupload-image.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.fileupload-audio.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.fileupload-video.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.fileupload-validate.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.fileupload-ui.js', CClientScript::POS_END);
				Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/main.js', CClientScript::POS_END);
			} else {
				throw new CHttpException(500, 'JQueryUpload - Error: Couldn\'t find assets to publish.');
			}
			$model = new GalleryImage;
	
			$this->render('index', array(
					'model' => $model,
					'gallery_id' => $gallery_id
			));
	}
	
	/**
	 * actionUpload - Action dùng để upload image
	 */
	public function actionUpload()
	{
		//dump($_FILES);
		//if (isset($_POST['files'])){
			//echo '44';exit;
			//$gallery_id = Yii::app()->request->getParam('gallery_id','default');
			//echo $gallery_id; exit;
			$model = new GalleryImage;
			$model->attributes = $_POST['GalleryImage'];
			$fileUpload = CUploadedFile::getInstance($model, 'image');
			if (isset($fileUpload)) {
				$model->image = $fileUpload->name;
				$model->name = $fileUpload->name;
				
				if ($model->validate()) {
					// Thiết lập đường dẫn upload
					$uploadPath = YiiBase::getPathOfAlias('webroot').'/wwwroot/upload_files/galleries/images/';
					//$uploadPath = YiiBase::getPathOfAlias('webroot') . '/wwwroot/upload_files/news/'; 
					if (!is_dir($uploadPath)) {
							@mkdir($uploadPath);
							@chmod($uploadPath, 0777);
					}
					
					// Thiết lập các thông tin để lưu vào DB
					//$model->upload_time = date('Y-m-d H:i:s', time());
					
					// Upload image
					$filename = time() . mt_rand(0, 0xfff) . '.' . $fileUpload->getExtensionName();
					$fileUpload->saveAs($uploadPath.$filename);

					Yii::import('ext.phpthumb.EasyPhpThumb');
					$resize = new EasyPhpThumb();
					$resize->init();
					$resize->setThumbsDirectory($uploadPath);
					$resize->load($uploadPath.$filename)
						->resize($this->module->_image['fitting']['width'], $this->module->_image['fitting']['height'])
						->save($filename);
					
					// Create thumb
					$thumbsPath = $uploadPath;
					if (!is_dir($thumbsPath)) {
						@mkdir($thumbsPath);
						@chmod($thumbsPath, 0777);
					}
					
					$thumbs = new EasyPhpThumb();
					$thumbs->init();
					$thumbs->setThumbsDirectory($thumbsPath);
					$thumbs->load($uploadPath.$filename)
							->resize($this->module->image['thumbnail']['width'], $this->module->image['thumbnail']['height'])
							->save('thumb_'.$filename);
					
					$model->image = $filename;
					$model->save();
					
					echo CJSON::encode(array('files'=>
							array(
								array(
									'name' => $model->name,
									'type' => $fileUpload->type,
									'size' => $fileUpload->size,
									'url' => Yii::app()->createUrl('/').'/wwwroot/upload_files/galleries/images/'.$filename,
									'thumbnailUrl' => Yii::app()->createUrl('/') . '/wwwroot/upload_files/galleries/images/thumb_' . $filename,
									'deleteUrl' => Yii::app()->createUrl('/galleries/manageUpload/delete', array('id'=>$model->id)),
									'deleteType' => 'DELETE',
								)
							)
					));
				} else {
					// Print errors
					$strError = '';
					foreach ($model->getErrors() as $error)
					{
						foreach ($error as $text)
							$strError .= $text . ' ';
					}
					echo CJSON::encode(array(array('name'=>$fileUpload->name,'error'=>$strError)));
				}
			} 
			Yii::app()->end();
		//}
	}
	
	/**
	 * actionDelete - Action dùng để xóa image đã upload
	 *
	 * @param string $id 
	 */
	public function actionDelete($id)
	{
			$model = GalleryImage::model()->findByPk($id);
			//$uploadPath = Yii::app()->createUrl('/').'/wwwroot/upload_files/galleries/images/';
			$uploadPath = YiiBase::getPathOfAlias('webroot') . Yii::app()->controller->module->_image['url'];
			
			try{
				if(is_file($uploadPath.'/'.$model->image)){
					unlink($uploadPath.'/'.$model->image);
				}
				if(is_file($uploadPath.'/thumb_'.$model->image)){
					unlink($uploadPath.'/thumb_'.$model->image);
				}
			}catch (Exception $err){}
			$model->delete();
	}
	
	public function loadModel($id)
    {
        $model = Gallery::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

}