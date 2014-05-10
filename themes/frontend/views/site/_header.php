<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="format-detection" content="telephone=no" />
	
	<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/css/include/reset.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/css/include/grid.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/css/include/awesome.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/css/include/animations.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/lib/revolution/css/revolution.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/lib/bxslider/jquery.bxslider.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/lib/fancybox/jquery.fancybox.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/lib/switcher/css/switcher.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/css/main.css" rel="stylesheet" />
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body data-page="home" data-boxed="false">

<!--div class="container" id="page">
	<div id="header">
		<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>
	</div>
	</div-->

	<?php //$this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?>

	<?php echo $content; ?>
	

</body>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/respond.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/retina.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/jquery.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/jquery-ui.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/jquery.mobile.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/browser.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/scale.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/quicksand.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/lib/revolution/js/plugins.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/lib/revolution/js/revolution.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/lib/bxslider/jquery.bxslider.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/lib/fancybox/jquery.fancybox.pack.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/lib/switcher/js/switcher.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/main.js"></script>
</html>