<div  class="jlb_galleries_dialog jlb_dialog">
  <h1 class="jlb_title_dialog"><?php echo 'Manage Galleries Images'; ?></h1>
	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'galleries-form',
			'action' => Yii::app()->createUrl('/galleries/ManageGalleryImages/admin', array('gallery_id'=>$_GET['gallery_id'])),
			'htmlOptions'=>array(
					'class'=>'jform',
			),
			'enableAjaxValidation'=>true,

	)); ?>
	
	<?php
		$this->widget('ext.selgridview.SelGridView', array(
			'id' => 'galleries-image-grid',
			'dataProvider' => $model->search(),
			//'filter' => $model,
			//'template' => count($model->search()->getData())==0?'{items}':'{items}<div class="jlb_pager_wrapper"><a href="#" onclick="return actionDelete();">Delete</a>{pager}{summary}</div>',
			'selectableRows'=>count($model->search()->getData()),

			//'baseScriptUrl'	=>	"", 
			'columns' => array(
				array(
					'id'=>'autoId',
					'class'=>'CCheckBoxColumn',
					'selectableRows' => '10',
					'value' => '$data->primaryKey',
				),
				/*array(
						'class' => 'CCheckBoxColumn',
						'htmlOptions' => array('class'=>'jform'),
						'headerHtmlOptions' => array('class' => 'jform jlb_checkbox_check_all jlb_checkbox_check_all_disable'),
						'header' => '<input type="checkbox" class="select-on-check-all"/>',
						'value' => '$data->primaryKey',
				), */
				//'id',
				'name',
				//'alias',
				//'image',
				array(
						'name' => 'image',
						'type' => 'image',
						//'value' => 'Yii::app()->createUrl("/")."/wwwroot/upload_files/galleries/images/".$data->image',
						'value' => function($data){
							echo CHtml::image(Yii::app()->CreateUrl('/') .'/wwwroot/upload_files/galleries/images/' .$data->image,'alt', array('class'=>"view_image_small"));
						}
				),
				'priority',
				//'created',
				/*
				'description',
				'content',
				'priority',
				'created',
				'modified',
				*/
				array(
					'name'=>'is_published',
					'header'=>'Published',
					'filter'=>array('1'=>'Yes','0'=>'No'),
				   // 'value'=>'($data->is_published=="1")?("Yes"):("No")'
					'value' => function($data){  
						echo CHtml::ajaxSubmitButton(($data->is_published=="1")?("Unactive"):("Active"),array('/galleries/manageImagesByGallery/ajaxactive/','id'=>$data->id), array('success'=>'reloadGrid'),array('class'=>($data->is_published=="1")?('label-warning'):('label-success'), 'style'=>'border: 0'));
					},
				),
				
				
				array(
						'class' => 'CButtonColumn',
						'htmlOptions' => array('class'=>null),
						'header' => 'Options',
						'headerHtmlOptions' => array('class'=>null),
				),
			),
		));
	?>
	
			<div class="jlb_row jlb_row_bottom jform jlb_align_center">
				<a href="<?php echo Yii::app()->createUrl("/galleries/manageUpload/?gallery_id=".$_GET['gallery_id'], array()); ?>"><input type="button" value="<?php echo 'Upload Images'; ?>" class="uploadstyle label-success" /></a>
			</div>
	
	<script>
	function reloadGrid(data) {
		$.fn.yiiGridView.update('galleries-image-grid');
	}
	</script>

	<?php echo CHtml::ajaxSubmitButton('Filter',array('/galleries/manageImagesByGallery/ajaxupdate'), array(),array("style"=>"display:none;")); ?>
	<?php echo CHtml::ajaxSubmitButton('Activate',array('/galleries/manageImagesByGallery/ajaxupdate','act'=>'doActive'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
	<?php echo CHtml::ajaxSubmitButton('In Activate',array('/galleries/manageImagesByGallery/ajaxupdate','act'=>'doInactive'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
	<?php echo CHtml::ajaxSubmitButton('Delete',array('/galleries/manageImagesByGallery/ajaxupdate','act'=>'doDelete'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
	<?php //echo CHtml::ajaxSubmitButton('Update sort order',array('/staticpages/staticpage/ajaxupdate','act'=>'doSortOrder'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>

	<?php $this->endWidget(); ?>
</div>
<script type="text/javascript">
/*
    $(document).ready(function(){
        $('.jqTransform').jqTransform();
				$(".jlb_checkbox_check_all .jqTransformCheckbox").jlb_checkbox_check_all(); 
    });
		//$(".jform").jqTransform();
*/
	function actionDelete()
	{	
		if ($("input:checkbox[name='galleries-image-grid_c0[]']:checked").length == 0) {
			alert('<?php echo 'Please select at least one item to remove.'; ?>');
			return false;
		}
		if (confirm('<?php echo 'Are you sure you want to delete?'; ?>')) $('#galleries-form').submit();
		return false;
	}
</script>


