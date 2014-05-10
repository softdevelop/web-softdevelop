<?php
/* @var $this ManageTeamController */
/* @var $model Team */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'team-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
			<?php //echo $form->textField($model, 'image'); ?>
			<div class="image-form">
				<?php if (isset($model->image) && ($model->image != NULL)): ?>
					<?php if(file_exists(Yii::app()->createUrl('/').'wwwroot/upload_files/teams/' . $model->image)): ?>
						<img src="<?php echo  Yii::app()->createUrl('/').'/wwwroot/upload_files/teams/' . $model->image; ?>" width="100" height="70"/>
					<?php else : ?>
						<?php echo CHtml::image('/wwwroot/upload_files/no-image.jpg', 'Image', array(
									'width'		=>	'100',
									'height'	=>	'100'
						)); ?>
					<?php endif ?>
					<div class="clr"></div>
				<?php endif ?>
				<div class="uploader" id="uniform-undefined">
					<?php echo $form->fileField($model,'image'); ?>
					<span class="filename">No file selected</span>
					<span class="action">Choose File</span>
				</div>
				<?php echo $form->error($model,'image'); ?>
			</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'showIndex'); ?>
		<?php echo $form->checkBox($model,'showIndex'); ?>
		<?php echo $form->error($model,'showIndex'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->