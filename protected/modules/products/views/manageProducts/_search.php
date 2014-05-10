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
		<?php echo $form->label($model, 'name'); ?>
		<?php echo $form->textField($model, 'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'alias'); ?>
		<?php echo $form->textField($model, 'alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'content'); ?>
		<?php echo $form->textArea($model, 'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'image'); ?>
		<?php echo $form->textField($model, 'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'price'); ?>
		<?php echo $form->textField($model, 'price', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'special_price'); ?>
		<?php echo $form->textField($model, 'special_price', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'quantity'); ?>
		<?php echo $form->textField($model, 'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'style'); ?>
		<?php echo $form->textField($model, 'style', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'priority'); ?>
		<?php echo $form->textField($model, 'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'is_special'); ?>
		<?php echo $form->dropDownList($model, 'is_special', array('0' => 'No', '1' => 'Yes'), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'is_published'); ?>
		<?php echo $form->dropDownList($model, 'is_published', array('0' => 'No', '1' => 'Yes'), array('prompt' => 'All')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'create_time'); ?>
		<?php echo $form->textField($model, 'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'update_time'); ?>
		<?php echo $form->textField($model, 'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
