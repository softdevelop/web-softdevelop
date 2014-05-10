<?php

// this contains the application parameters that can be maintained via GUI
// using Yii::app()->params['paramName']
return array(
	'roles' => array(
		'SADMIN' => 'Super Administrator',
		'ADMIN' => 'Admin',
		'SEEKER' => 'Seeker',
		'EMPLOYER' => 'Employer',
		'AWAITING' => 'Awaiting',
		'MEMBER' => 'Member',
	),
	'params'=>array(
		'PAYPAL_API_USERNAME'=>'khuong.tc_api1.gmail.com',
		'PAYPAL_API_PASSWORD'=>'1388044989',
		'PAYPAL_API_SIGNATURE'=>'AFcWxV21C7fd0v3bYYYRCpSSRl31An9io0eOsAKntJ6LgbOe-b-CiTFO',
		'PAYPAL_MODE'=>'sandbox'   
    ),
	
	// this is displayed in the header section
	'title'=>'Happy Kids School',
	// this is used in error pages
	'adminEmail'=>'webmaster@example.com',
	// number of posts displayed per page
	'postsPerPage'=>10,
	// maximum number of comments that can be displayed in recent comments portlet
	'recentCommentCount'=>10,
	// maximum number of tags that can be displayed in tag cloud portlet
	'tagCloudCount'=>20,
	// whether post comments need to be approved before published
	'commentNeedApproval'=>true,
	// the copyright information displayed in the footer section
	'copyrightInfo'=>'Copyright &copy; 2009 by My Company.',
	/*
	'fb'=>array(
		'appID'=>'259526824188679',
		'appSecret'=>'3c5d04f167d7775288ad6e4b0963381a',
	)
	*/
	'fb'=>array(
		'appID'=>'160079250850441',
		'appSecret'=>'7b543180449f216296b20bf75d4e6cd7',
	)
);