<!-- BEGIN SIDEBAR MENU -->        
<ul class="page-sidebar-menu">
	<li>
		<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		<div class="sidebar-toggler hidden-phone"></div>
		<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
	</li>
	<li>
		<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
		<form class="sidebar-search">
			<div class="input-box">
				<a href="javascript:;" class="remove"></a>
				<input type="text" placeholder="Search..." />
				<input type="button" class="submit" value=" " />
			</div>
		</form>
		<!-- END RESPONSIVE QUICK SEARCH FORM -->
	</li>
	<li class="start active">
		<a href="<?php echo Yii::app()->createUrl('/user/admin/dashboard');?>"><i class="icon-home"></i><span class="title"><?php echo Yii::t('strings','Dashboard') ?></span></a><span class="selected"></span>
	</li>
	<li class="<?php if($this->module->getName()=="user") echo "open";?>">
		<a href="javascript:;">
		<i class="icon-user"></i> 
		<span class="title"><?php echo Yii::t('strings','Users') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if($this->module->getName()=="user") echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/user/admin');?>" >
				<?php echo Yii::t('strings','All users') ?><span class="arrow"></span></a>
				<ul class="sub-menu">
					<li >
						<a href="<?php echo Yii::app()->createUrl('/user/admin');?>">
						<?php echo Yii::t('strings','List Users') ?></a>
					</li>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/user/admin/create');?>">
						<?php echo Yii::t('strings','Create Users') ?></a>
					</li>
				</ul>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/user/admin/admin/memberType/Business');?>">
				<?php echo Yii::t('strings','Business') ?><span class="arrow"></span></a>
				<ul class="sub-menu">
					<li>
						<a href="<?php echo Yii::app()->createUrl('/user/admin/admin/memberType/Business');?>">
						<?php echo Yii::t('strings','List Business') ?></a>
					</li>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/user/admin/createFrontEndUser/Business');?>">
						<?php echo Yii::t('strings','Create Business') ?></a>
					</li>
				</ul>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/user/admin/admin/memberType/General');?>">
				<?php echo Yii::t('strings','Generals') ?><span class="arrow"></span></a>
				<ul class="sub-menu">
					<li >
						<a href="<?php echo Yii::app()->createUrl('/user/admin/admin/memberType/General');?>">
						<?php echo Yii::t('strings','List Generals') ?></a>
					</li>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/user/admin/createFrontEndUser/General');?>">
						<?php echo Yii::t('strings','Create General') ?></a>
					</li>
				</ul>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/user/admin/admin/memberType/Agent');?>">
				<?php echo Yii::t('strings','Agents') ?> <span class="arrow"></span></a>
				<ul class="sub-menu">
					<li >
						<a href="<?php echo Yii::app()->createUrl('/user/admin/admin/memberType/Agent');?>">
						<?php echo Yii::t('strings','List Agents') ?></a>
					</li>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/user/admin/createFrontEndUser/Agent');?>">
						<?php echo Yii::t('strings','Create Agent') ?></a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="<?php if($this->module->getName()=="rights") echo "open";?>">
		<a href="javascript:;">
		<i class="icon-shield"></i> 
		<span class="title"><?php echo Yii::t('strings','Permissons') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if($this->module->getName()=="rights") echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/rights/assignment/view'); ?>">
				<?php echo Yii::t('strings','Assignments');?></a>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/rights/authItem/permissions'); ?>"><?php echo Yii::t('strings','Permissions');?></a>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/rights/authItem/roles'); ?>"><?php echo Yii::t('strings','Roles');?></a>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/rights/authItem/tasks'); ?>"><?php echo Yii::t('strings','Tasks');?></a>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/rights/authItem/operations'); ?>"><?php echo Yii::t('strings','Operations');?></a>
			</li>
		</ul>
	</li>
	<li class="<?php if($this->module->getName()=="banners") echo "open";?>">
		<a href="javascript:;">
		<i class="icon-table"></i> 
		<span class="title"><?php echo Yii::t('strings','Banners') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if($this->module->getName()=="banners") echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/banners/manageBanners/admin'); ?>"><?php echo Yii::t('strings','List Banners');?></a>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/banners/manageBanners/create'); ?>"><?php echo Yii::t('strings','Create Banners');?></a>
			</li>
		</ul>
	</li>
	<li class="<?php if($this->module->getName()=="advertisements") echo "open";?>" >
		<a href="javascript:;">
		<i class="icon-bullhorn"></i> 
		<span class="title"><?php echo Yii::t('strings','Advertisements') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if($this->module->getName()=="advertisements") echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/advertisements/manageAdvertisements/admin'); ?>"><?php echo Yii::t('strings','List advertisements');?></a>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/advertisements/manageAdvertisements/create'); ?>"><?php echo Yii::t('strings','Create advertisements');?></a>
			</li>
		</ul>
	</li>
	<li class="<?php if(Yii::app()->controller->id == 'staticpage') echo "open";?>">
		<a href="javascript:;">
		<i class="icon-copy"></i> 
		<span class="title"><?php echo Yii::t('strings','Static Pages') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if(Yii::app()->controller->id == 'staticpage') echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/staticpages/staticpage/admin'); ?>"><?php echo Yii::t('strings','List static pages');?></a>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/staticpages/staticpage/create'); ?>"><?php echo Yii::t('strings','Create static page');?></a>
			</li>
		</ul>
	</li>
	
	<li class="<?php if((Yii::app()->controller->id == 'manageNews') || (Yii::app()->controller->id == 'manageNewsCategories')) echo "open";?>">
		<a href="javascript:;">
		<i class="icon-barcode"></i> 
		<span class="title"><?php echo Yii::t('strings','News') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if((Yii::app()->controller->id == 'manageNews') || (Yii::app()->controller->id == 'manageNewsCategories')) echo "style='display:block;'"; ?>>
			<li>
				<a href="<?php echo Yii::app()->createUrl('/news/ManageNews/admin'); ?>"><?php echo Yii::t('strings','List news');?></a>
			</li>
			<li>
				<a href="<?php echo Yii::app()->createUrl('/news/ManageNews/create'); ?>"><?php echo Yii::t('strings','Create News');?></a>
			</li>
			<li class="<?php if(Yii::app()->controller->id == 'manageNewsCategories') echo "open";?>">
				<a href="javascript:;">
				<span class="title"><?php echo Yii::t('strings','News Categories') ?></span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu" <?php if(Yii::app()->controller->id == 'manageNewsCategories') echo "style='display:block;'"; ?>>
					<li>
						<a href="<?php echo Yii::app()->createUrl('/news/manageNewsCategories/admin'); ?>"><?php echo Yii::t('strings','List news categories');?></a>
					</li>
					<li>
						<a href="<?php echo Yii::app()->createUrl('/news/manageNewsCategories/create'); ?>"><?php echo Yii::t('strings','Create news category');?></a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	
	<li class="<?php if((Yii::app()->controller->id == 'manageProducts') || (Yii::app()->controller->id == 'manageColorForAProduct') || (Yii::app()->controller->id == 'manageProductCategories') ) echo "open";?>">
		<a href="javascript:;">
		<i class="icon-barcode"></i> 
		<span class="title"><?php echo Yii::t('strings','Products') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if((Yii::app()->controller->id == 'manageProducts') || (Yii::app()->controller->id == 'manageColorForAProduct') || (Yii::app()->controller->id == 'manageProductCategories'))  echo "style='display:block;'"; ?>>
			<li>
				<a href="<?php echo Yii::app()->createUrl('/products/manageProducts/admin'); ?>"><?php echo Yii::t('strings','List Products');?></a>
			</li>
			<li>
				<a href="<?php echo Yii::app()->createUrl('/products/manageProducts/create'); ?>"><?php echo Yii::t('strings','Create Products');?></a>
			</li>
			<li class="<?php if(Yii::app()->controller->id == 'manageProductCategories') echo "open";?>">
				<a href="javascript:;">
				<span class="title"><?php echo Yii::t('strings','Products Categories') ?></span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu" <?php if(Yii::app()->controller->id == 'manageProductCategories') echo "style='display:block;'"; ?>>
					<li>
						<a href="<?php echo Yii::app()->createUrl('/products/ManageProductCategories/admin'); ?>"><?php echo Yii::t('strings','List Products categories');?></a>
					</li>
					
					<li>
						<a href="<?php echo Yii::app()->createUrl('/products/ManageProductCategories/tree'); ?>"><?php echo Yii::t('strings','Products categories Tree');?></a>
					</li>
					
					<li>
						<a href="<?php echo Yii::app()->createUrl('/products/ManageProductCategories/create'); ?>"><?php echo Yii::t('strings','Create Products category');?></a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="<?php if((Yii::app()->controller->id == 'manageprojects') || (Yii::app()->controller->id == 'manageColorForAProduct') || (Yii::app()->controller->id == 'manageProductCategories') ) echo "open";?>">
		<a href="javascript:;">
		<i class="icon-barcode"></i> 
		<span class="title"><?php echo Yii::t('strings','Projects') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if((Yii::app()->controller->id == 'manageProjects') || (Yii::app()->controller->id == 'manageColorForAProduct') || (Yii::app()->controller->id == 'manageProductCategories'))  echo "style='display:block;'"; ?>>
			<li>
				<a href="<?php echo Yii::app()->createUrl('/projects/manageProjects/admin'); ?>"><?php echo Yii::t('strings','List Projects');?></a>
			</li>
			<li>
				<a href="<?php echo Yii::app()->createUrl('/projects/manageProjects/create'); ?>"><?php echo Yii::t('strings','Create Projects');?></a>
			</li>
			<li class="<?php if(Yii::app()->controller->id == 'manageProductCategories') echo "open";?>">
				<a href="javascript:;">
				<span class="title"><?php echo Yii::t('strings','Projects Categories') ?></span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu" <?php if(Yii::app()->controller->id == 'manageProductCategories') echo "style='display:block;'"; ?>>
					<li>
						<a href="<?php echo Yii::app()->createUrl('/products/ManageProductCategories/admin'); ?>"><?php echo Yii::t('strings','List Products categories');?></a>
					</li>
					
					<li>
						<a href="<?php echo Yii::app()->createUrl('/products/ManageProductCategories/tree'); ?>"><?php echo Yii::t('strings','Products categories Tree');?></a>
					</li>
					
					<li>
						<a href="<?php echo Yii::app()->createUrl('/products/ManageProductCategories/create'); ?>"><?php echo Yii::t('strings','Create Products category');?></a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	
	<li class="<?php if(Yii::app()->controller->id == 'manageProductColor') echo "open";?>">
		<a href="javascript:;">
		<i class="icon-barcode"></i> 
		<span class="title"><?php echo Yii::t('strings','Manage Products Color ') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if(Yii::app()->controller->id == 'manageProductColor') echo "style='display:block;'"; ?>>
			<li>
				<a href="<?php echo Yii::app()->createUrl('/products/ManageProductColor/admin'); ?>"><?php echo Yii::t('strings','List Products Color');?></a>
			</li>
			<li>
				<a href="<?php echo Yii::app()->createUrl('/products/ManageProductColor/create'); ?>"><?php echo Yii::t('strings','Create Products Color');?></a>
			</li>
		</ul>
	</li>
	
	
	<li class="<?php if(Yii::app()->controller->id == 'manageServices') echo "open";?>">
		<a href="javascript:;">
		<i class="icon-wrench"></i> 
		<span class="title"><?php echo Yii::t('strings','Service') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if((Yii::app()->controller->id == 'manageServices') ||  (Yii::app()->controller->id == 'manageServiceCategory') )echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/services/manageServices/admin'); ?>"><?php echo Yii::t('strings','List services');?></a>							
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/services/manageServices/create'); ?>"><?php echo Yii::t('strings','Create services');?></a>	
			</li>
			<li class="<?php if(Yii::app()->controller->id == 'manageServiceCategory') echo "open";?>">
				<a href="javascript:;">
				<span class="title"><?php echo Yii::t('strings','Service Categories') ?></span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu" <?php if(Yii::app()->controller->id == 'manageServiceCategory') echo "style='display:block;'"; ?>>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/services/manageServiceCategory/admin'); ?>"><?php echo Yii::t('strings','List service categories');?></a>
					</li>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/services/manageServiceCategory/tree'); ?>"><?php echo Yii::t('strings','Tree service categories');?></a>
					</li>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/services/manageServiceCategory/create'); ?>"><?php echo Yii::t('strings','Create service categories');?></a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	
	<li class="<?php if($this->module->getName()=="configs" || $this->module->getName()=="account_types") echo "open";?>">
		<a href="javascript:;">
			<i class="icon-cogs"></i> 
			<span class="title"><?php echo Yii::t('strings','Configs') ?></span>
			<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if($this->module->getName()=="procducts" || $this->module->getName()=="account_types") echo "style='display:block;'"; ?>>
			<li class="<?php if($this->module->getName()=="products" And Yii::app()->controller->id=="configs") echo "open";?>">
				<a href="<?php echo Yii::app()->createUrl('/products/configs/admin'); ?>"><?php echo Yii::t('strings','Cart status');?><span class="arrow"></span></a>	
				<ul class="sub-menu" <?php if($this->module->getName()=="products" And Yii::app()->controller->id=="configs") echo "style='display:block;'"; ?>>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/products/configs/admin'); ?>"><?php echo Yii::t('strings','List cart status');?></a>
					</li>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/products/configs/create'); ?>"><?php echo Yii::t('strings','Create cart status');?></a>	
					</li>
				</ul>
			</li>
			<li class="<?php if($this->module->getName()=="account_types") echo "open";?>">
				<a href="<?php echo Yii::app()->createUrl('/account_types/manageAccountTypes/admin'); ?>"><?php echo Yii::t('strings','Account types');?><span class="arrow"></span></a>	
				<ul class="sub-menu" <?php if($this->module->getName()=="account_types") echo "style='display:block;'"; ?>>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/account_types/manageAccountTypes/admin'); ?>"><?php echo Yii::t('strings','List account types');?></a>
					</li>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/account_types/manageAccountTypes/create'); ?>"><?php echo Yii::t('strings','Create account type');?></a>	
					</li>
				</ul>
			</li>
			<li >
				<a href="#"><?php echo Yii::t('strings','Shipping & commission');?></a>	
			</li>
		</ul>
	</li>
	
	<li class="<?php if(Yii::app()->controller->id == 'manageGalleryImages') echo "open";?>">
		<a href="javascript:;">
		<i class="icon-shopping-cart"></i> 
		<span class="title"><?php echo Yii::t('strings','Gallery Images') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if(Yii::app()->controller->id == 'manageGalleryImages') echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/galleries/manageGalleryImages/admin'); ?>"><?php echo Yii::t('strings','List Gallery Images');?></a>	
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/galleries/manageGalleryImages/create'); ?>"><?php echo Yii::t('strings','Create Gallery Images');?></a>	
			</li>
		</ul>
	</li>
	
	<li class="<?php if((Yii::app()->controller->id == 'manageGalleries') || (Yii::app()->controller->id == 'manageGalleryImages')) echo "open";?>">
		<a href="javascript:;">
		<i class="icon-shopping-cart"></i> 
		<span class="title"><?php echo Yii::t('strings','Galleries') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if(Yii::app()->controller->id == 'manageGalleries') echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/galleries/manageGalleries/admin'); ?>"><?php echo Yii::t('strings','List galleries');?></a>	
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/galleries/manageGalleries/create'); ?>"><?php echo Yii::t('strings','Create galleries');?></a>	
			</li>
			<li class="<?php if(Yii::app()->controller->id == 'manageGalleryImages') echo "open";?>">
				<a href="javascript:;">
				<span class="title"><?php echo Yii::t('strings','Gallery Images') ?></span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu" <?php if(Yii::app()->controller->id == 'manageGalleryImages') echo "style='display:block;'"; ?>>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/galleries/manageGalleryImages/admin'); ?>"><?php echo Yii::t('strings','List Gallery Images');?></a>	
					</li>
					<li >
						<a href="<?php echo Yii::app()->createUrl('/galleries/manageGalleryImages/create'); ?>"><?php echo Yii::t('strings','Create Gallery Images');?></a>	
					</li>
				</ul>
			</li>
		</ul>
	</li>

	<li class="<?php if($this->module->getName()=="agents") echo "open";?>">
		<a href="javascript:;">
		<i class="icon-group"></i> 
		<span class="title"><?php echo Yii::t('strings','Agents') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if($this->module->getName()=="agents") echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/agents/manageAgents/admin'); ?>"><?php echo Yii::t('strings','List agents');?></a>	
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/agents/manageAgents/create'); ?>"><?php echo Yii::t('strings','Create agent');?></a>	
			</li>
		</ul>
	</li>

	<li class="<?php if($this->module->getName()=="countries") echo "open";?>">
		<a href="javascript:;">
		<i class="icon-globe"></i> 
		<span class="title"><?php echo Yii::t('strings','Countries') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if($this->module->getName()=="countries") echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/countries/manageCountries/admin'); ?>"><?php echo Yii::t('strings','List countries');?></a>
			</li>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/countries/manageCountries/create'); ?>"><?php echo Yii::t('strings','Create country');?></a>
			</li>
		</ul>
	</li>

	<li class="<?php if($this->module->getName()=="contacts") echo "open";?>">
		<a href="javascript:;">
		<i class="icon-comments"></i> 
		<span class="title"><?php echo Yii::t('strings','Contacts') ?></span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu" <?php if($this->module->getName()=="contacts") echo "style='display:block;'"; ?>>
			<li >
				<a href="<?php echo Yii::app()->createUrl('/contacts/manageContacts/admin'); ?>"><?php echo Yii::t('strings','List contacts');?></a>
			</li>
		</ul>
	</li>
</ul>
<!-- END SIDEBAR MENU -->