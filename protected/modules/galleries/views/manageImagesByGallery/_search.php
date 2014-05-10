<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl.WWWROOT_BACKEND; ?>/css/form.css"/>

<div class="wd-form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route). '/gallery_id/'.$model->gallery_id,
	'method' => 'get',
)); ?>
	<fieldset>

	<div class="wd-input">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id', array('maxlength' => 16)); ?>
	</div>

	<div class="wd-input">
		<?php echo $form->label($model, 'gallery_id'); ?>
		<?php echo $form->textField($model, 'gallery_id', array('maxlength' => 16)); ?>
	</div>

	<div class="wd-input">
		<?php echo $form->label($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 64)); ?>
	</div>

	<div class="wd-input">
		<?php echo $form->label($model, 'image'); ?>
		<?php echo $form->textField($model, 'image', array('maxlength' => 255)); ?>
	</div>

	<div class="wd-input">
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
	</div>

	<div class="wd-input">
		<?php echo $form->label($model, 'created'); ?>
		<?php echo $form->textField($model, 'created', array('maxlength' => 20)); ?>
	</div>
	
	<div class="wd-input">
		<?php echo $form->label($model, 'is_published'); ?>
		<?php echo $form->dropDownList($model, 'is_published', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="wd-submit buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>
	</fieldset>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
