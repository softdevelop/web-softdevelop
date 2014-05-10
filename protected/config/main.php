<?php

Yii::setPathOfAlias('widgets', dirname(__FILE__).'/../components/widgets');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
Yii::setPathOfAlias('frontend', dirname(__FILE__).'/../../wwwroot/themes/frontend');
Yii::setPathOfAlias('chartjs', dirname(__FILE__).'/../extensions/yii-chartjs-master');
Yii::setPathOfAlias('editable', dirname(__FILE__).'/../extensions/x-editable');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
require "function_alias.php";
require "_constants.php";
require "_helper.php";

return array(
	'sourceLanguage'=>'en',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SDCMS',

	// preloading 'log' component
	'preload'=>array(
		'log',
		'chartjs'
	),

	// autoloading model and component classes
	'import'=> require(dirname(__FILE__) . '/_imports.php'),
	/*
    'controllerMap'=>array(
        'AXtree'=>'ext.NestedDynaTree.AXcontroller'
    ),
	*/
	'defaultController'=>'site',

	// application components
	'components'=> require(dirname(__FILE__) . '/_component.php'),

	// Module
	'modules' => CMap::mergeArray(
		// Public Module
		require(dirname(__FILE__) . '/_modules.php'), 
		
		// Private module
		array()
	),
	
	// Set default theme
	//'theme'=>'frontend',
	'theme'=>'bootstrap',
	'params'	=>	require(dirname(__FILE__) . '/_params.php'), 
);
