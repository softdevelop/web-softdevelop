<?php

class BannersModule extends CWebModule
{
	public $image	=	array(
		'width'=>720,
		'height'=>479,
		'show'	=>	true,
		'thumbnail'	=>	array(
			'width'	=>	200,
			'height'	=>	100,
		),
		'fitting'	=>	array(
			'width'	=>	600,
			'height'	=>	420,
		),
		'url'	=>	'/wwwroot/upload_files/banners/',
		'uri'	=>	'wwwroot/upload_files/banners/',
	);
	
	public $description	=	array(
		'show'	=>	true
	);
	
	public $title	=	array(
		'show'	=>	true
	);
	
	public $url	=	array(
		'show'	=>	true
	);
	
	public $create_time	=	array(
		'show'	=>	false
	);
	
	public $update_time	=	array(
		'show'	=>	false
	);
	
	public $priority	=	array(
		'show'	=>	true
	);
	
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'banners.models.*',
			'banners.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
