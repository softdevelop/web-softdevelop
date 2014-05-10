<?php 
class CkEditorUploader{
	static $config = array();
	public static function getConfig(){
		return self::$config;
	}
	public static function setConfig($config){
		self::$config = $config;
	}
	public static function upload(){
		//extensive suitability check before doing anything with the file...
		if (!isset($_FILES['upload']) OR ($_FILES['upload'] == "none") OR (empty($_FILES['upload']['name'])) )
		{
			$message = "No file uploaded.";
		}
		else if ($_FILES['upload']["size"] == 0)
		{
			$message = "The file is of zero length.";
		}
		else if (($_FILES['upload']["type"] != "image/pjpeg") AND ($_FILES['upload']["type"] != "image/jpeg") AND ($_FILES['upload']["type"] != "image/png") AND ($_FILES['upload']["type"] != "image/gif"))
		{
			$message = "The image must be in either JPG or PNG format. Please upload a JPG or PNG instead.";
		}
		else if (!is_uploaded_file($_FILES['upload']["tmp_name"]))
		{
			$message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
		}
		else {
			if(!isset(self::$config['url'])){
				throw new CException('Chưa xác định thư mục upload.');
			}
			$fileName = time()."_".$_FILES['upload']['name'];
			if(isset(self::$config['filename'])){
				$fileName = self::$config['filename'];
			}
			
			$url = self::$config['url'].$fileName;
			$uploadPath = YiiBase::getPathOfAlias('webroot').self::$config['url'];
			$uploadedFilePath = $uploadPath.time()."_".$_FILES['upload']['name'];
			
			if(!is_dir($uploadPath)){
				mkdir($uploadPath,0777,true);
				//throw new CException('Chưa xác định thư mục upload.');
			}
			
			$message = "";
			$move = move_uploaded_file($_FILES['upload']['tmp_name'], $uploadedFilePath);
			if(!$move)
			{
				$message = "Error moving uploaded file. Check the script is granted Read/Write/Modify permissions.";
			}
		}
		$funcNum = $_GET['CKEditorFuncNum'] ;
		echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
	}
}
?>