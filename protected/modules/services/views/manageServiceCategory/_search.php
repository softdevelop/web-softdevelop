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
		<?php echo $form->label($model, 'image'); ?>
		<?php echo $form->textField($model, 'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'lft'); ?>
		<?php echo $form->textField($model, 'lft'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'rght'); ?>
		<?php echo $form->textField($model, 'rght'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'parent_id'); ?>
		<?php echo $form->textField($model, 'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'level'); ?>
		<?php echo $form->textField($model, 'level'); ?>
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
