<div  class="jlb_galleries_dialog jlb_dialog">
  <h1 class="jlb_title_dialog"><?php echo 'Manage Galleries Images'; ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'gallery-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'name',
		//'alias',
		'image',
		'priority',
		'created',
		/*
		'description',
		'content',
		'priority',
		'created',
		'modified',
		*/
		array(
					'name' => 'is_published',
					'value' => '($data->is_published === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
					'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
		),
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>

	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'galleries-form',
			'action' => Yii::app()->createUrl('/galleries/manageGalleryImages/admin', array('gallery_id'=>$_GET['gallery_id'])),
	)); ?>

    <?php 
			$thmlActions = '
					<div class="jlb_functions">
						<div class="jlb_header">
							<h4>Seclect action</h4>
						</div>
						<ul>
							<li><a href="#" onclick="return actionDelete();">Delete</a></li>
						</ul>
					</div>';
			$this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'galleries-image-grid',
        'dataProvider' => $model->search(),
        'enableSorting' => false,
        'rowCssClass' => '',
        'afterAjaxUpdate' => 'function(){$(".jform").jqTransform();$(".jlb_checkbox_check_all .jqTransformCheckbox").jlb_checkbox_check_all();}',
        'template' => count($model->search()->getData())==0?'{items}':'{items}<table class="jlb_table"><tr><td><div class="jlb_pager_wrapper">'.$thmlActions.'{pager}{summary}</div></td></tr></table>',
        'itemsCssClass' => 'jlb_table',
        'summaryCssClass' => 'jlb_summary_css',
        'pagerCssClass' => 'jlb_pager_css',
        'pager' => array(
						//'class'=>'widgets.JLLinkPager',
						//'class'=>'CButtonColumn',
						//'pages'=>'5',
						//'maxButtonCount' => 5
				),
        'columns'=>array(
            array(
                'class' => 'CCheckBoxColumn',
                'htmlOptions' => array('class'=>'jform'),
								'headerHtmlOptions' => array('class' => 'jform jlb_checkbox_check_all jlb_checkbox_check_all_disable'),
								'header' => '<input type="checkbox"/>',
                'value' => '$data->primaryKey',
            ),
            array(
                'name' => 'Images',
                'type' => 'image',
                'value' => 'Yii::app()->createUrl("/")."/wwwroot/upload_files/gallery_images/thumbs/".$data->image',
            ),
            array(
                'htmlOptions' => array('width'=>'60%'),
                'headerHtmlOptions' => array('class'=>'jlb_title'),
                'type' => 'html',
                'value' => 'CHtml::encode($data->name)."</a><br/>".CHtml::encode($data->description)',
            ),
            array(
                'class' => 'CButtonColumn',
                'htmlOptions' => array('class'=>null),
                'header' => 'Options',
                'headerHtmlOptions' => array('class'=>null),
                'template' => '<div class="jlb_functions"><div class="jlb_header"><h4>Options</h4></div><ul><li>{update}</li><li>{delete}</li></ul></div>',
                'afterDelete' => 'document.location=document.location;',
                'buttons' => array(
                    'update' => array(
                        'imageUrl' => false,
                        'url' => 'Yii::app()->createUrl("/galleries/manageGalleryImages/update",array("gallery_id"=>$_GET["gallery_id"],"id"=>$data->primaryKey))',
                    ),
                    'delete' => array(
                        'imageUrl' => false,
                        'url' => 'Yii::app()->createUrl("/galleries/manageGalleryImages/delete",array("gallery_id"=>$_GET["gallery_id"],"id"=>$data->primaryKey))',
                    ),
                ),
            ),
        ),
			)); ?>
	
			<div class="jlb_row jlb_row_bottom jform jlb_align_center">
				<a href="<?php echo Yii::app()->createUrl("/galleries/manageUpload", array('gallery_id'=>$_GET['gallery_id'])); ?>"><input type="button" value="<?php echo 'Upload Images'; ?>" /></a>
			</div>
	
    <?php $this->endWidget(); ?>
</div>
<script type="text/javascript">
/*
    $(document).ready(function(){
        $('.jform').jqTransform();
    });
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