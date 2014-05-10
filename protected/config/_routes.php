<?php

return array(
	
	'user/registration/captcha/<v:\d+>'	=>	'user/registration/captcha',
    'gii' => 'gii',
    'gii/<controller:\w+>' => 'gii/<controller>',
    'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
	'contacts/manageContacts/delete/<id:\d+>'=>'contacts/manageContacts/delete',
	
	'' => 'site/index',
	'project/<alias:.+>' => 'site/project',
	'about' =>'site/about',
	'contact' => 'site/contact',
);
