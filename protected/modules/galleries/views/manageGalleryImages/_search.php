<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'gallery_id'); ?>
		<?php echo $form->dropDownList($model, 'gallery_id', GxHtml::listDataEx(Gallery::model()->findAllAttributes(null, true)), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'image'); ?>
		<?php echo $form->textField($model, 'image', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'create_time'); ?>
		<?php echo $form->textField($model, 'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'update_time'); ?>
		<?php echo $form->textField($model, 'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'is_published'); ?>
		<?php echo $form->dropDownList($model, 'is_published', array('0' => 'No', '1' => 'Yes'), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'priority'); ?>
		<?php echo $form->textField($model, 'priority'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
