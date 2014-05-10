<div class="form">


<?php $form = $this->beginWidget('CActiveForm', array(
	'id' => 'news-categories-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'name'); ?>
		<script type="text/javascript" language="javascript">
            jQuery(document).ready(function() {
                $('#NewsCategories_name').keyup(function(){
                    var value = $('#NewsCategories_name').val();
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
                    $('#NewsCategories_alias').val(value);
                });
            });
        </script>
		
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model, 'alias', array('maxlength' => 64)); ?>
		<?php echo $form->error($model,'alias'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lft'); ?>
		<?php echo $form->textField($model, 'lft'); ?>
		<?php echo $form->error($model,'lft'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rght'); ?>
		<?php echo $form->textField($model, 'rght'); ?>
		<?php echo $form->error($model,'rght'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->textField($model, 'parent_id'); ?>
		<?php echo $form->error($model,'parent_id'); ?>
		</div><!-- row -->
		<!--
		<div class="row">
		<?php //echo $form->labelEx($model,'image'); ?>
		<?php //echo $form->textField($model, 'image', array('maxlength' => 255)); ?>
		<?php //echo $form->error($model,'image'); ?>
		</div> rrow -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model, 'content'); ?>
		<?php echo $form->error($model,'content'); ?>
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

		<!--<label><?php //echo GxHtml::encode($model->getRelationLabel('newsMiddles')); ?></label> -->
		<?php //echo $form->checkBoxList($model, 'newsMiddles', GxHtml::encodeEx(GxHtml::listDataEx(NewsMiddle::model()->findAllAttributes(null, true)), false, true)); ?>
		<div class="row buttons">
			<?php
			echo GxHtml::submitButton('Save');
			$this->endWidget();
			?>
		</div>
</div><!-- form -->