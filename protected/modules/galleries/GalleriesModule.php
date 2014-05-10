<?php

class GalleriesModule extends CWebModule
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
		'url'	=>	'/wwwroot/upload_files/galleries/',
		'uri'	=>	'wwwroot/upload_files/galleries/',
	);
	
	public $_image	=	array(
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
		'url'	=>	'/wwwroot/upload_files/galleries/images/',
		'uri'	=>	'wwwroot/upload_files/galleries/images/',
	);
	
	public $title = array(
		'show' => true
	);
	
	public $alias	=	array(
		'show'	=>	true
	);
	
	public $description	=	array(
		'show'	=>	true
	);
	
	public $content	=	array(
		'show'	=>	true
	);
	public $priority = array(
		'show' => true
	);
	
	public $create_time	=	array(
		'show'	=>	true
	);
	public $update_time = array(
		'show' => true
	);
	
	public $is_published	=	array(
		'show'	=>	true
	);
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'galleries.models.*',
			'galleries.components.*',
			'application.components.*',
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
