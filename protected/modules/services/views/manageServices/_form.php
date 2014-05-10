<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'service-form',
	'enableAjaxValidation' => false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name'); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<script type="text/javascript" language="javascript">
            jQuery(document).ready(function() {
                $('#Service_name').keyup(function(){
                    createAlias();
                });
                $('#Service_name').focusout(function(){
                    createAlias();
                });
								
				function createAlias() {
                    var value = $('#Service_name').val();
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
                    $('#Service_alias').val(value);
                };
            });
        </script>
		<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model, 'alias'); ?>
		<?php echo $form->error($model,'alias'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownList($model, 'category_id', GxHtml::listDataEx(ServiceCategory::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'category_id'); ?>
		</div><!-- row -->
		
		<?php if (Yii::app()->controller->module->description['show']){ ?>
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
		
		<?php if (Yii::app()->controller->module->content['show']){ ?>
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
		
		<?php if (Yii::app()->controller->module->image['show']){ ?>
		<div class="row">
			<?php echo $form->labelEx($model,'image'); ?>
			<?php //echo $form->textField($model, 'image'); ?>
			<div class="image-form">
				<?php if (isset($model->image) && ($model->image != NULL)): ?>
					<?php if(file_exists(Yii::app()->createUrl('/').'wwwroot/upload_files/services/' . $model->image)): ?>
						<img src="<?php echo  Yii::app()->createUrl('/').'/wwwroot/upload_files/services/' . $model->image; ?>" width="100" height="70"/>
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
		<?php } ?>
		
		<?php if (Yii::app()->controller->module->price['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model, 'price', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'price'); ?>
		</div><!-- row -->
		<?php } ?>
		
		<?php if (Yii::app()->controller->module->special_price['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'special_price'); ?>
		<?php echo $form->textField($model, 'special_price', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'special_price'); ?>
		</div><!-- row -->
		<?php } ?>
		
		<?php if (Yii::app()->controller->module->quantity['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model, 'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
		</div><!-- row -->
		<?php } ?>
		
		<?php if (Yii::app()->controller->module->style['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'style'); ?>
		<?php echo $form->textField($model, 'style', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'style'); ?>
		</div><!-- row -->
		<?php } ?>
		
		<?php if (Yii::app()->controller->module->priority['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model, 'priority'); ?>
		<?php echo $form->error($model,'priority'); ?>
		</div><!-- row -->
		<?php } ?>
		
		<?php if (Yii::app()->controller->module->is_special['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'is_special'); ?>
		<?php echo $form->checkBox($model, 'is_special'); ?>
		<?php echo $form->error($model,'is_special'); ?>
		</div><!-- row -->
		<?php } ?>
		
		<?php if (Yii::app()->controller->module->is_published['show']){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'is_published'); ?>
		<?php echo $form->checkBox($model, 'is_published'); ?>
		<?php echo $form->error($model,'is_published'); ?>
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
		</div></div><!-- form -->