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
	$.fn.yiiGridView.update('service-grid', {
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
	'id' => 'service-grid',
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
		'name',
		//'alias',
		array(
				'name'=>'category_id',
				'value'=>'GxHtml::valueEx($data->category)',
				'filter'=>GxHtml::listDataEx(ServiceCategory::model()->findAllAttributes(null, true)),
		),
		array(
            'name'=>'image',
			'type' => 'raw',
            'value' => function($data){
				echo CHtml::image(Yii::app()->CreateUrl('/') .'/wwwroot/upload_files/services/' .$data->image,'alt', array('class'=>"view_image_small"));
			}
        ),
		array(
            'name'=>'description',
			//'type' => 'raw',
            'value' => function($data){
				echo CHtml::decode($data->description);
			}
        ),
		array(
            'name'=>'content',
			//'type' => 'raw',
            'value' => function($data){
				echo CHtml::decode($data->content);
			}
        ),				
		//'description',
		//'content',
		/*
		'image',
		'price',
		'special_price',
		'quantity',
		'style',
		'priority',
		array(
					'name' => 'is_special',
					'value' => '($data->is_special === 0) ? \'No\' : \'Yes\'',
					'filter' => array('0' => 'No', '1' => 'Yes'),
					),
		array(
					'name' => 'is_published',
					'value' => '($data->is_published === 0) ? \'No\' : \'Yes\'',
					'filter' => array('0' => 'No', '1' => 'Yes'),
					),
		'create_time',
		'update_time',
		*/
		array(
            'name'=>'priority',
            'type'=>'raw',
            'value'=>'CHtml::textField("priority[$data->id]",$data->priority,array("style"=>"width:50px;"))',
            'htmlOptions'=>array("width"=>"50px")
        ),
		array(
            'name'=>'is_published',
            'header'=>'Published',
            'filter'=>array('1'=>'Yes','0'=>'No'),
           // 'value'=>'($data->is_published=="1")?("Yes"):("No")'
		    'value' => function($data){  
				echo CHtml::ajaxSubmitButton(($data->is_published=="1")?("Unactive"):("Active"),array('/services/manageServices/ajaxactive/','id'=>$data->id), array('success'=>'reloadGrid'),array('class'=>($data->is_published=="1")?('label-warning'):('label-success'), 'style'=>'border: 0'));
			}
		),
		array(
			'class' => 'CButtonColumn',
			'header' => 'Actions'
		),
	)
)); ?>



<script>
function reloadGrid(data) {
    $.fn.yiiGridView.update('service-grid');
}
function orderReloadGrid(data) {
	location.reload();
}
</script>

<?php echo CHtml::ajaxSubmitButton('Filter',array('/services/manageServices/ajaxupdate'), array(),array("style"=>"display:none;")); ?>
<?php echo CHtml::ajaxSubmitButton('Activate',array('/services/manageServices/ajaxupdate','act'=>'doActive'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('In Activate',array('/services/manageServices/ajaxupdate','act'=>'doInactive'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('Delete',array('/services/manageServices/ajaxupdate','act'=>'doDelete'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('Update sort order',array('/services/manageServices/ajaxupdate','act'=>'doSortOrder'), array('success'=>'orderReloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>

<?php $this->endWidget(); ?>