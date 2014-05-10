<?php
	return array(
		/*
		'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
		'email'=>array(
				'class'=>'application.extensions.email.Email',
				'delivery'=>'php', //Will use the php mailing function.
				//May also be set to 'debug' to instead dump the contents of the email into the view
		),
		*/
		'chartjs' => array('class' => 'chartjs.components.ChartJs'),
		'messages' => array (
		// Pending on core: http://code.google.com/p/yii/issues/detail?id=2624
			'extensionPaths' => array(
				'giix' => 'ext.giix.messages', // giix messages directory.
				),
		),
		'user'=>array(
			'class'=>'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'	=>	true,
			'authTimeout'		=>	3000,
			'loginUrl' 			=> 	array('/user/login'),
			'returnUrl'			=> 	array("/user/admin/dashboard"),
		),
		//,class Controller extends RightsBaseController
		'authManager'=>array('class'=>'RDbAuthManager'),

		'db'=> require (dirname(__FILE__).'/_db.php'),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
				'errorAction'=>'site/error',
		),
		'log'=>array(
		    'class'=>'CLogRouter',
		    'routes'=>array(
		        array(
		            'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
		            // Access is restricted by default to the localhost
		            'ipFilters'=>array('127.0.0.1','192.168.1.*'),
		        ),
				array(
					//'class'=>'DBLogRoute',
					'class'=>'CDbLogRoute',
					//'levels'=>'error, warning, trace, info, profile',
					'levels'=>'trace, info',
					'connectionID'=>'db',
					'logTableName'=>'log',
					'autoCreateLogTable'=>true,
				), 
		    ),
		),
		
		'assetManager' => array(
			'basePath' => dirname(__FILE__) . "/../../wwwroot/assets/",
			'baseUrl' => "/../../wwwroot/assets",
		),
		
		'themeManager'	=> array(
			'basePath'	=> dirname(__FILE__) . '/../../themes/',
			//'themeNames'	=>	array('frontend', 'backend', 'classic'),
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>require(dirname(__FILE__) . '/_routes.php'),
			
		),
		'image'=>array(
			'class'=>'ImgManager',
			'versions'=>array(
				'small'=>array('width'=>120,'height'=>120),
				'medium'=>array('width'=>320,'height'=>320),
				'large'=>array('width'=>640,'height'=>640),
			),
		),
        'widgetFactory'=>array(
            'class'=>'CWidgetFactory',
        ),
		'Paypal' => array(
			'class'=>'application.components.Paypal',
			'apiUsername' => 'congkhuong1308-facilitator_api1.gmail.com',
			'apiPassword' => '1387962728',
			'apiSignature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31A2LOxRBMCGpY03ADAdtFRuHjV-Tl',
			'apiLive' => false,
		 
			'returnUrl' => 'test/paypal/confirm/', //regardless of url management component
			'cancelUrl' => 'test/paypal/cancel/', //regardless of url management component
		 
			// Default currency to use, if not set USD is the default
			'currency' => 'USD',
		 
			// Default description to use, defaults to an empty string
			//'defaultDescription' => '',
		 
			// Default Quantity to use, defaults to 1
			//'defaultQuantity' => '1',
		 
			//The version of the paypal api to use, defaults to '3.0' (review PayPal documentation to include a valid API version)
			//'version' => '3.0',
		),
		'editable' => array(
            'class'     => 'editable.EditableConfig',
            'form'      => 'bootstrap',        //form style: 'bootstrap', 'jqueryui', 'plain' 
            'mode'      => 'popup',            //mode: 'popup' or 'inline'  
            'defaults'  => array(              //default settings for all editable elements
               'emptytext' => 'Click to edit'
            )
        ),
		'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
	)
?>