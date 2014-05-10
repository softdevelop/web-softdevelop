<?php
/* @var $this StaticpageController */
/* @var $model StaticPage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'static-page-form',
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
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	<script type="text/javascript" language="javascript">
		jQuery(document).ready(function() {
			$('#StaticPage_title').keyup(function(){
				createAlias();
			});
			$('#StaticPage_title').focusout(function(){
				createAlias();
			});
							
			function createAlias() {
				var value = $('#StaticPage_title').val();
				value = value.replace(/[בא???ד?????ג?????]/ig, 'a');
				value = value.replace(/[נ]/ig, 'd');
				value = value.replace(/[יט???ך?????]/ig, 'e');
				value = value.replace(/[ם????]/ig, 'i');
				value = value.replace(/[ף????פ?????ץ?????]/ig, 'o');
				value = value.replace(/[תש???‎?????]/ig, 'u');
				value = value.replace(/[?????]/ig, 'y');
				value = value.replace(/[^A-Za-z0-9\s_-]/ig, '');
				value = value.replace(/\s/ig, '-');
				value = value.toLowerCase();
				$('#StaticPage_alias').val(value);
			};
		});
	</script>
	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>
	<?php if (Yii::app()->controller->module->image['show']) {?>
	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php //echo $form->textField($model, 'image'); ?>
		<div class="image-form">
			<?php if (isset($model->image) && ($model->image != NULL)): ?>
				<?php if(file_exists(Yii::app()->createUrl('/').'wwwroot/upload_files/staticpages/' . $model->image)): ?>
					<img src="<?php echo  Yii::app()->createUrl('/').'/wwwroot/upload_files/staticpages/' . $model->image; ?>" width="100" height="70"/>
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
	<?php } ?>
	
	<?php if (Yii::app()->controller->module->description['show']) {?>
		<div class="row">
				<?php echo $form->labelEx($model,'description'); ?>
				<?php //echo $form->textArea($model, 'description'); ?>
				<div class="ckeditor megin">
					<?php $this->widget('application.extensions.ckeditor.CKEditor', array(
						'model'=>$model,
						'attribute'=>'description',
						'language'=>'en',
						'editorTemplate'=>'advanced',
						'width'	=>	'300px',
						'height'	=>	'420px',
						'options'=>array(
							'filebrowserUploadUrl'=>$this->createUrl('upload'),
						),
						//'rows'=>10, 
						//'cols'=>30,
						'toolbar'=>array(
							array('Bold', 'Italic', 'Underline', 'Strike'),
							array('JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'),
							array('Format'),
							array( 'Font', 'FontSize', 'FontColor', 'TextColor'),
							'/',
							array('Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord' ),
							array('Image', 'Table', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote'),
							array('Subscript','Superscript'),
							array( 'Link', 'Unlink' ),
							array('Source'),
						)
						)); 
					?>
				</div>
				<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
	<?php } ?>
		
		<?php if (Yii::app()->controller->module->content['show']) {?>
		<div class="row">
			<?php echo $form->labelEx($model,'content'); ?>
			<?php //echo $form->textArea($model, 'content'); ?>
				<div class="ckeditor megin">
				<?php $this->widget('application.extensions.ckeditor.CKEditor', array(
					'model'=>$model,
					'attribute'=>'content',
					'language'=>'en',
					'editorTemplate'=>'advanced',
					'width'	=>	'300px',
					'height'	=>	'420px',
					'options'=>array(
						'filebrowserUploadUrl'=>$this->createUrl('upload'),
					),
					//'rows'=>10, 
					//'cols'=>30,
					'toolbar'=>array(
						array('Bold', 'Italic', 'Underline', 'Strike'),
						array('JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'),
						array('Format'),
						array( 'Font', 'FontSize', 'FontColor', 'TextColor'),
						'/',
						array('Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord' ),
						array('Image', 'Table', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote'),
						array('Subscript','Superscript'),
						array( 'Link', 'Unlink' ),
						array('Source'),
					)
					)); 
				?>
			</div>
			<?php echo $form->error($model,'content'); ?>
		</div><!-- row -->
	<?php } ?>
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'position'); ?>
		<?php //echo $form->textField($model,'position',array('size'=>60,'maxlength'=>128)); ?>
		<?php //echo $form->error($model,'position'); ?>
	</div> -->
	
	<?php if(Yii::app()->controller->module->positon['show']) { ?>
		<div class="row">
			<?php echo $form->labelEx($model,'position', array('class'=>'control-label')); ?>
			
				<?php echo $form->dropDownList($model,'position', Yii::app()->controller->module->positon['values'], array('empty'=>'Select position')); ?>
				<?php echo $form->error($model,'position'); ?>
			
		</div><!-- wd-input -->
	<?php } ?>
	
	<?php if(Yii::app()->controller->module->section['show']) { ?>
		<div class="row">
			<?php echo $form->labelEx($model,'section', array('class'=>'control-label')); ?>
			<?php echo $form->dropDownList($model,'section', Yii::app()->controller->module->section['values'], array('empty'=>'Select section'));?>
			<?php echo $form->error($model,'section'); ?>
		</div><!-- wd-input -->
	<?php } ?>
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'section'); ?>
		<?php //echo $form->textField($model,'section',array('size'=>60,'maxlength'=>128)); ?>
		<?php //echo $form->error($model,'section'); ?>
	</div> -->
	
	
	<?php if (Yii::app()->controller->module->show_on_index['show']) {?>
		<div class="row">
			<?php echo $form->labelEx($model,'show_on_index'); ?>
			<?php echo $form->checkBox($model,'show_on_index'); ?>
			<?php echo $form->error($model,'show_on_index'); ?>
		</div>
	<?php } ?>
	
	<?php if (Yii::app()->controller->module->priority['show']) {?>
		<div class="row">
			<?php echo $form->labelEx($model,'priority'); ?>
			<?php echo $form->textField($model,'priority'); ?>
			<?php echo $form->error($model,'priority'); ?>
		</div>
	<?php } ?>
	
	<?php if (Yii::app()->controller->module->create_time['show']) {?>
		<div class="row">
			<?php echo $form->labelEx($model,'create_time'); ?>
			<?php echo $form->textField($model,'create_time'); ?>
			<?php echo $form->error($model,'create_time'); ?>
		</div>
	<?php } ?>
	
	<?php if (Yii::app()->controller->module->update_time['show']) {?>
		<div class="row">
			<?php echo $form->labelEx($model,'update_time'); ?>
			<?php echo $form->textField($model,'update_time'); ?>
			<?php echo $form->error($model,'update_time'); ?>
		</div>
	<?php } ?>
	
	<?php if (Yii::app()->controller->module->is_published['show']) {?>
		<div class="row">
			<?php echo $form->labelEx($model,'is_published'); ?>
			<?php echo $form->checkBox($model,'is_published'); ?>
			<?php echo $form->error($model,'is_published'); ?>
		</div>
	<?php } ?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->