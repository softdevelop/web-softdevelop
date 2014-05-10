<?php

class ProductsModule extends CWebModule
{
	public $image = array(
		'show'	=>	true,
		'thumbnail'	=>	array(
			'width'	=>	200,
			'height'	=>	100,
		),
		'fitting'	=>	array(
			'width'	=>	600,
			'height'	=>	420,
		),
		'url'	=>	'/wwwroot/upload_files/products/',
		'uri'	=>	'wwwroot/upload_files/products/',
	);
	
	public $_image = array(
		'show'	=>	true,
		'thumbnail'	=>	array(
			'width'	=>	200,
			'height'	=>	100,
		),
		'fitting'	=>	array(
			'width'	=>	600,
			'height'	=>	420,
		),
		'url'	=>	'/wwwroot/upload_files/products/colors/',
		'uri'	=>	'wwwroot/upload_files/products/colors/',
	);
	
	public $description	=	array(
		'show'	=>	true
	);
	
	public $content	=	array(
		'show'	=>	true
	);
	
	public $price	=	array(
		'show'	=>	true
	);
	
	public $create_time	=	array(
		'show'	=>	false
	);
	
	public $update_time	=	array(
		'show'	=>	false
	);
	
	public $special_price	=	array(
		'show'	=>	true
	);
	public $is_published	=	array(
		'show'	=>	true
	);
	
	public $quantity	=	array(
		'show'	=>	true
	);
	public $style	=	array(
		'show'	=>	true
	);
	
	public $priority	=	array(
		'show'	=>	true
	);
	
	public $is_special	=	array(
		'show'	=>	true
	);
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'products.models.*',
			'products.components.*',
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
