<?php

class StaticpagesModule extends CWebModule
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
		'url'	=>	'/wwwroot/upload_files/staticpages/',
		'uri'	=>	'wwwroot/upload_files/staticpages/',
	);
	public $positon	=	array(
		'show'	=>	true,
		'values'	=>	array(
			"top"	=>	"Top",
			"bottom"=>	"Bottom",
		)
	);
	public $section	=	array(
		'show'	=>	true,
		'values'	=>	array(
			"section1"	=>	"Section 1",
			"section2"	=>	"Section 2",
			"section3"	=>	"Section 3",
		)
	);
	
	public $description	=	array(
		'show'	=>	true,
	);	
	public $content	=	array(
		'show'	=>	true,
	);
	public $show_on_index	=	array(
		'show'	=>	true,
	);	
	public $priority	=	array(
		'show'	=>	true,
	);
	
	public $is_published	=	array(
		'show'	=>	true,
	);	
	
	public $create_time	=	array(
		'show'	=>	false,
	);	
	public $update_time	=	array(
		'show'	=>	false,
	);
	
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'staticpages.models.*',
            'products.models.*',
			'staticpages.components.*',
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
