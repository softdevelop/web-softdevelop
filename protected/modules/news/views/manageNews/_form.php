<?php
/* @var $this ManageNewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
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
                $('#News_title').keyup(function(){
                    createAlias();
                });
                $('#News_title').focusout(function(){
                    createAlias();
                });	
				function createAlias() {
                    var value = $('#News_title').val();
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
                    $('#News_alias').val(value);
                };
            });
	</script>
	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>
	<?php if (Yii::app()->controller->module->image['show']){ ?>
		<div class="row">
			<?php echo $form->labelEx($model,'image'); ?>
			<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'image'); ?>
		</div>
	<?php } ?>
	<?php if (Yii::app()->controller->module->description['show']){ ?>
		<div class="row">
			<?php echo $form->labelEx($model,'description'); ?>
			<?php //echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
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
	<?php } ?>
	<?php if (Yii::app()->controller->module->content['show']){ ?>
		<div class="row">
			<?php echo $form->labelEx($model,'content'); ?>
			<?php //echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
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
		</div>
	<?php } ?>
	<?php if (Yii::app()->controller->module->priority['show']){ ?>
		<div class="row">
			<?php echo $form->labelEx($model,'priority'); ?>
			<?php echo $form->textField($model,'priority'); ?>
			<?php echo $form->error($model,'priority'); ?>
		</div>
	<?php } ?>
	<?php if (Yii::app()->controller->module->is_published['show']){ ?>
		<div class="row">
			<?php echo $form->labelEx($model,'is_published'); ?>
			<?php echo $form->checkBox($model,'is_published'); ?>
			<?php echo $form->error($model,'is_published'); ?>
		</div>
	<?php } ?>
	<?php if (Yii::app()->controller->module->create_time['show']){ ?>
		<div class="row">
			<?php echo $form->labelEx($model,'create_time'); ?>
			<?php echo $form->textField($model,'create_time'); ?>
			<?php echo $form->error($model,'create_time'); ?>
		</div>
	<?php } ?>
	<?php if (Yii::app()->controller->module->update_time['show']){ ?>
		<div class="row">
			<?php echo $form->labelEx($model,'update_time'); ?>
			<?php echo $form->textField($model,'update_time'); ?>
			<?php echo $form->error($model,'update_time'); ?>
		</div>
	<?php } ?>
	<?php if (Yii::app()->controller->module->news_time['show']){ ?>
		<div class="row">
			<?php echo $form->labelEx($model,'news_time'); ?>
			<?php echo $form->textField($model,'news_time'); ?>
			<?php echo $form->error($model,'news_time'); ?>
		</div>
	<?php } ?>
		<div class="row">
			<?php echo $form->labelEx($model,'categories', array('class'=>'')); ?>
			<?php
				/*foreach($modelCategories as $data){
					//$treeDatas =
					for($i=2; $i<$data['level']; $i++)
						$data['name'] = "----".$data['name'];
				} */
				/*
				echo $form->dropDownList($model,'categories', $dropDownDatas
						//$model()->findAll(), 'id', 'name', 'parrent_id'),
				);
				*/
				if($model->isNewRecord){
					$dropDownDatas = CHtml::listData($modelCategories , 'id', 'name');
					echo $form->dropDownList($model,'categories',$dropDownDatas,array('multiple'=>true, 'size' => '10', 'name'=> 'NewsMiddle[category_id][]')); 
				} else { ?> 
				<select id="NewsMiddle_category_id" name="NewsMiddle[category_id][]" class="dropdown" multiple="multiple" size='10'>
					<?php 
					$i=0; 
					foreach ($modelCategories as $data) : ?> 
						<option 
							<?php 
								
								if(isset($catIdsBelongTo)){
									if(in_array($data['id'], $catIdsBelongTo)){
										echo 'selected="selected" '; 
									} 
								}
							?> 
							value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?>
						</option> 
					<?php endforeach ?> 
				</select> 
			<?php } ?> 
			<?php echo $form->error($model,'categories'); ?>
		</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->