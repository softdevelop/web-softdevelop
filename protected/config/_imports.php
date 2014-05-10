<?php
return array(
    'application.models.*',
    'application.components.*',
    'application.extensions.*',
	'application.extensions.easyPaypal.*',
    'ext.giix-components.*',
	
    'application.modules.user.UserModule',
    'application.modules.user.models.*',
    'application.modules.user.components.*',
	
	'application.modules.rights.*', 
	'application.modules.rights.components.*', 
	
	'application.modules.contacts.ContactModule', 
	'application.modules.contacts.models.*', 
	'application.modules.contacts.components.*',
	
	'application.modules.services.ServicesModule', 
	'application.modules.services.models.*', 
	'application.modules.services.components.*',
	
	'application.modules.new.NewModule', 
	'application.modules.new.models.*', 
	'application.modules.new.components.*',
	
	'application.modules.projects.ProjectsModule', 
	'application.modules.projects.models.*', 
	'application.modules.projects.components.*',
	
	'editable.*' //easy include of editable classes
);