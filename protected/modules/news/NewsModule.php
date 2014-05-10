<?php

class NewsModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'news.models.*',
			'news.components.*',
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
	public $image	=	array(
		'show'	=>	false,
	);
	public $description	=	array(
		'show'	=>	true,
	);
	public $content	=	array(
		'show'	=>	true,
	);
	public $priority	=	array(
		'show'	=>	true,
	);
	public $is_published	=	array(
		'show'	=>	true,
	);
	public $create_time	=	array(
		'show'	=>	true,
	);
	public $update_time	=	array(
		'show'	=>	true,
	);
	public $news_time	=	array(
		'show'	=>	true,
	);
}
