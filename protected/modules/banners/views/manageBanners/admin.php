<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	'Manage',
);

$this->menu = array(
		array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('banner-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo 'Manage' . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $form=$this->beginWidget('CActiveForm', array(
		'enableAjaxValidation'=>true,
	)
); ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'banner-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		array(
            'id'=>'autoId',
            'class'=>'CCheckBoxColumn',
            'selectableRows' => '10',
			'value' => '$data->primaryKey',
        ),
		'id',
		'title',
		//'image',
		array(
            'name'=>'image',
			'type' => 'raw',
            'value' => function($data){
				echo CHtml::image(Yii::app()->CreateUrl('/') .'/wwwroot/upload_files/banners/' .$data->image,'alt', array('class'=>"view_image_small"));
			}
        ),
		//'description',
		//'url',
		//'priority',
		array(
            'name'=>'priority',
            'type'=>'raw',
            'value'=>'CHtml::textField("priority[$data->id]",$data->priority,array("style"=>"width:50px;"))',
            'htmlOptions'=>array("width"=>"50px"),
        ),
		/*
		'create_time',
		'update_time',
		*/
		array(
			'class' => 'CButtonColumn',
			'header' => 'Actions',
		),
	),
)); ?>



<script>
function reloadGrid(data) {
    $.fn.yiiGridView.update('banner-grid');
}
</script>
<?php echo CHtml::ajaxSubmitButton('Filter',array('/banners/manageBanners/ajaxupdate'), array(),array("style"=>"display:none;")); ?>
<?php //echo CHtml::ajaxSubmitButton('Activate',array('/banners/manageBanners/ajaxupdate','act'=>'doActive'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php //echo CHtml::ajaxSubmitButton('In Activate',array('/banners/manageBanners/ajaxupdate','act'=>'doInactive'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('Delete',array('/banners/manageBanners/ajaxupdate','act'=>'doDelete'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('Update sort order',array('/banners/manageBanners/ajaxupdate','act'=>'doSortOrder'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>

<?php $this->endWidget(); ?>