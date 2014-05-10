<div id="header">
	<div class="container">
		<div class="wrapper">
			<ul id="menu" class="full">
				<li class="submenu">
					<a> Menu </a>
					<ul>
						<li class="<?php if ((Yii::app()->controller->action->id == 'index') && (Yii::app()->controller->id == 'site')) echo 'current-menu-item';?>">
							<a href="<?php echo Yii::app()->createUrl('/site/index');?>">Home</a>
						</li>
						<li class="submenu">
							<a> Portfolio</a>
							<?php $this->widget('Projecthead', array(
								//'form' => $newsletterSubscribeForm
							)); ?>
						</li>
						<li class="submenu">
							<a>Blog</a>
							<ul>
								<li>
									<a href="blog.html"> Home</a>
								</li>
								<li>
									<a href="list.html"> Post list</a>
								</li>
								<li>
									<a href="post.html">Post</a>
								</li>
							</ul>
						</li>
						<li class="<?php if (Yii::app()->controller->action->id == 'about') echo 'current-menu-item';?>">
							<a href="<?php echo Yii::app()->createUrl('/about');?>">About</a>
						</li>
						<li class="<?php if (Yii::app()->controller->action->id == 'contact') echo 'current-menu-item';?>">
							<a href="<?php echo Yii::app()->createUrl('/contact');?>"> Contact</a>
						</li>
					</ul>
				</li>
			</ul>

			<!-- LOGO -->

			<div id="logo">
				<a href="index.html">
					<img src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/images/logo.png" alt="" width="43" height="30"/>
					<span><b>SoftDevelop /</b> Web Architects</span>
				</a>
			</div>
		</div>
	</div>
</div>