<?php

class MultiUploadController extends BController
{
	
	public $layouts = '//layouts/main';
	
	public function actionIndex()
	{
		$model = new Gallery;
		if (isset($_POST['Gallery'])){
			echo 'ddd';exit;
		}
		//echo 'ddd';exit;
		$this->render('index');
	}
}