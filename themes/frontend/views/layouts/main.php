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
	
	<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/css/custom.css" rel="stylesheet" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body data-page="home" data-boxed="false">

<!--div class="container" id="page">
	<div id="header">
		<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>
	</div>
	</div-->

	<?php //$this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?>
	<!-- LAYOUT -->
	<div id="layout">
		<!-- HEADER -->
		<?php $this->renderPartial('//layouts/_header');; ?>
		
		<?php echo $content; ?>
		<!-- FOOTER TOP -->

            <div id="footer_top">
                <ul class="container seamless grid ">
                    <!-- LOGO -->
                    <li class="col-2-12">
                        <a href="#" class="logo"><b>SoftDevelop</b></a>
                    </li>
                    <li class="col-1-12 gap"></li>

                    <!-- FEATURED -->

                    <li class="col-3-12">
                        <h5>FEATURED POST</h5>
                        <h4>
                            <a href="post.html">
                                It is situated in the bay of
                            </a>
                        </h4>
                        <p> It is situated in the bay of Yeddo, and at but a short distance from that second capital of the Japanese Empire, and the</p>
                    </li>
                    <li class="col-1-12 gap"></li>

                    <!-- ADDRESS -->

                    <li class="col-2-12">
                        <h5>ADDRESS</h5>
                        <p>61 Le Van Si, Hoa Minh wall , Lien Chieu District Da Nang city, Viet Nam </p>
                        <p>
                            <a href="tel:84-1233-400-555">84 1233 400 555</a>
                            <br />
                            <a href="mailto:softdevelop.inc@gmail.com">contact@webdevelopvn.com</a>
                        </p>
                    </li>
                    <li class="col-1-12 gap"></li>

                    <!-- SOCIAL -->

                    <li class="col-2-12">
                        <h5>FOLLOW US</h5>
                        <ul class="follow">
                            <li><a href="https://www.facebook.com/softdevelopinc"></a></li>
                            <li>
                                <a href="#">Twitter</a>
                            </li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                        <!-- SCROLL TO TOP -->
                        <a class="arrow" data-anchor="body"> <i class="icon-angle-up"></i></a>
                    </li>
                </ul>
            </div>

            <!-- FOOTER BOTTOM -->
		<div id="footer_bottom">
			<div class="container grid">
				<ul class="row">
					<li class="col-1-3">&copy; Copyright 2013 Softdevelop INC </li>
					<li class="col-2-3 right">
						<!-- NAVIGATION -->
						<ul class="navigation">
							<li><a href="index.html">Home</a> </li>
							<li> <a href="portfolio4.html">Work</a></li>
							<li> <a href="about.html">About</a></li>
							<li><a href="contact.html"> Contact us </a></li>
						</ul>
						<!-- SOCIAL -->
						<ul class="follow">
							<li><a href="#"><i class="icon-twitter"></i> </a></li>
							<li> <a href="#"><i class="icon-facebook"></i> </a>
							</li>
							<li> <a href="mailto:Softdevelop.inc@gmail.com"><i class="icon-envelope-alt"></i> </a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/respond.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/retina.js"></script>
		<!--script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/js/include/jquery.js"></script-->
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