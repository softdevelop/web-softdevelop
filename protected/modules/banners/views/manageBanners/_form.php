<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', 
	array(
	'id' => 'banner-form',
	'enableAjaxValidation' => false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>
	<?php if (Yii::app()->controller->module->title['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model, 'title'); ?>
		<?php echo $form->error($model,'title'); ?>
		</div><!-- row -->
	<?php } ?>
	<?php if (Yii::app()->controller->module->image['show']){ ?>
		<div class="row">
			<?php echo $form->labelEx($model,'image'); ?>
			<?php //echo $form->textField($model, 'image'); ?>
			<div class="image-form">
				<?php if (isset($model->image) && ($model->image != NULL)): ?>
					<?php if(file_exists(Yii::app()->createUrl('/').'wwwroot/upload_files/banners/' . $model->image)): ?>
						<img src="<?php echo  Yii::app()->createUrl('/').'/wwwroot/upload_files/banners/' . $model->image; ?>" width="100" height="70"/>
					<?php else : ?>
						<?php echo CHtml::image('/wwwroot/upload_files/banners/no-image.jpg', 'Image', array(
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
		</div><!-- row -->
	<?php } ?>
	
	<?php if (Yii::app()->controller->module->description['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
	<?php } ?>
	<?php if (Yii::app()->controller->module->url['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model, 'url'); ?>
		<?php echo $form->error($model,'url'); ?>
		</div><!-- row -->
	<?php } ?>
	<?php if (Yii::app()->controller->module->priority['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model, 'priority'); ?>
		<?php echo $form->error($model,'priority'); ?>
		</div><!-- row -->
	<?php } ?>
	<?php if (Yii::app()->controller->module->create_time['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model, 'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
		</div><!-- row -->
	<?php } ?>
	<?php if (Yii::app()->controller->module->update_time['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model, 'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
		</div><!-- row -->
	<?php } ?>
		<div class="row buttons">
			<?php
			echo GxHtml::submitButton('Save');
			$this->endWidget();
			?>
		</div>
</div><!-- form -->