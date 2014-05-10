<?php
return array(
    'user',
	'rights' => array(
		'userClass' => 'User',
		'superuserName'=>'Admin',
		'authenticatedName'=>'Authenticated',
		'userIdColumn'=>'id',
		'userNameColumn'=>'username',
		'enableBizRule'=>true,
		'enableBizRuleData'=>false,
		'displayDescription'=>true,
		'flashSuccessKey'=>'RightsSuccess',
		'flashErrorKey'=>'RightsError',
		'install'=>false,
		'baseUrl'=>'/rights',
		'layout'=>'rights.views.layouts.main',
		//'appLayout'=>'application.views.layouts.main',
		//'cssFile'=>'rights.css',
		'install'=>true, 
		'debug'=>false,
	),
	'gii'=>array(
		'class'=>'system.gii.GiiModule',
		/*'generatorPaths'=>array(
			'bootstrap.gii',
		),*/
		'generatorPaths' => array(
			//'ext.giix.generators', // giix generators
			 'bootstrap.gii',
		),
		'password'=>'12345-'
	),
    'contacts',
	'staticpages',
	'news',
	'products',
	'services',
	'companies',
	'countries',
	'banners',
	'galleries',
	'test',
	'teams',
	'projects', 
);