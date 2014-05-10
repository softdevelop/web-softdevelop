<script src="<?php echo Yii::app()->request->baseUrl.WWWROOT_BACKEND;?>/js/jquery.colorPicker.min.js" type="text/javascript"/>
</script>

<link href="<?php echo Yii::app()->request->baseUrl.WWWROOT_BACKEND;?>/css/colorPicker.css" type="text/css"  rel="stylesheet"/>

<script type="text/javascript">
  //Run the code when document ready
  $(document).ready(function() {
	   $('#color1').colorPicker();
  });
</script>
<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'product-image-form',
	'enableAjaxValidation' => false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->dropDownList($model, 'product_id', GxHtml::listDataEx(Product::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'product_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
			<?php echo $form->labelEx($model,'image'); ?>
			<?php //echo $form->textField($model, 'image'); ?>
			<div class="image-form">
				<?php if (isset($model->image) && ($model->image != NULL)): ?>
					<?php if(file_exists(Yii::app()->createUrl('/').'wwwroot/upload_files/products/colors/' . $model->image)): ?>
						<img src="<?php echo  Yii::app()->createUrl('/').'/wwwroot/upload_files/products/colors/' . $model->image; ?>" width="100" height="70"/>
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
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model, 'priority'); ?>
		<?php echo $form->error($model,'priority'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'is_published'); ?>
		<?php echo $form->checkBox($model, 'is_published'); ?>
		<?php echo $form->error($model,'is_published'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model, 'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model, 'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
		</div><!-- row -->
		<div class="row">
			<?php echo $form->labelEx($model,'color'); ?>
			<div class="controlset" style="float: left; margin: 5px 0 10px 20px;">
			<?php //echo $form->textArea($model, 'color'); ?>
			<?php echo $form->textField($model,'color',array('size'=>30,'maxlength'=>64, 
			'id'=>'color1')); ?>
			<?php echo $form->error($model,'color'); ?>
			</div>
		</div><!-- row -->
		<div class="row buttons">
			<?php
			echo GxHtml::submitButton('Save');
			$this->endWidget();
			?>
		</div><!-- form -->
</div><!-- form -->