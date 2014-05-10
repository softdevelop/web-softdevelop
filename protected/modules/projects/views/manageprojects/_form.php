<?php
/* @var $this ManageprojectsController */
/* @var $model Project */
/* @var $form CActiveForm */
		
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	
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
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	
	<script type="text/javascript" language="javascript">
            jQuery(document).ready(function() {
                $('#Project_title').keyup(function(){
                    createAlias();
                });
                $('#Project_title').focusout(function(){
                    createAlias();
                });
								
				function createAlias() {
                    var value = $('#Project_title').val();
                    value = value.replace(/[áà???ã?????â?????]/ig, 'a');
                    value = value.replace(/[ð]/ig, 'd');
                    value = value.replace(/[éè???ê?????]/ig, 'e');
                    value = value.replace(/[í????]/ig, 'i');
                    value = value.replace(/[ó????ô?????õ?????]/ig, 'o');
                    value = value.replace(/[úù???ý?????]/ig, 'u');
                    value = value.replace(/[?????]/ig, 'y');
                    value = value.replace(/[^A-Za-z0-9\s_-]/ig, '');
                    value = value.replace(/\s/ig, '-');
                    value = value.toLowerCase();
                    $('#Project_alias').val(value);
                };
            });
        </script>
		<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model, 'alias'); ?>
		<?php echo $form->error($model,'alias'); ?>
		</div><!-- row -->

	<div class="row">
		<?php echo $form->labelEx($model,'short_description'); ?>
		<div class="ckeditor megin">
			<?php $this->widget('application.extensions.ckeditor.CKEditor', array(
				'model'=>$model,
				'attribute'=>'short_description',
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
		<?php echo $form->error($model,'short_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->labelEx($projectImage,'image'); ?>
		<?php //echo $form->textField($model, 'image'); ?>
		<div class="image-form">
			<?php
				$this->widget('CMultiFileUpload', array(
					'model'=>$projectImage,
					'attribute'=>'image',
					'accept'=>'jpg|gif|png',
					'options'=>array(
						// 'onFileSelect'=>'function(e, v, m){ alert("onFileSelect - "+v) }',
						// 'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
						// 'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
						// 'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
						// 'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
						// 'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
					),
					'denied'=>'File is not allowed',
					'max'=>5, // max 10 files
				));
			?>
			<?php echo $form->error($projectImage,'image'); ?>
		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->