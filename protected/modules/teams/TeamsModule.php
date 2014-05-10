<?php

class TeamsModule extends CWebModule
{	
	public $image = array(
		'show'	=>	true,
		'thumbnail'	=>	array(
			'width'	=>	300,
			'height'	=>	300,
		),
		'fitting'	=>	array(
			'width'	=>	600,
			'height'	=>	420,
		),
		'url'	=>	'/wwwroot/upload_files/teams/',
		'uri'	=>	'wwwroot/upload_files/teams/',
	);
	
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'teams.models.*',
			'teams.components.*',
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
