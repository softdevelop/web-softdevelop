<?php
/* @var $this ManageNewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage News</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $form=$this->beginWidget('CActiveForm', array(
		'enableAjaxValidation'=>true,
	)
); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
            'id'=>'autoId',
            'class'=>'CCheckBoxColumn',
            'selectableRows' => '10',
			'value' => '$data->primaryKey',
        ),
		'id',
		'title',
		'alias',
		//s'image',
		//'description',
		//'content',
		array(
			'name'=>'description',
			'type'=>'raw',
		), 
		 array(
			'name'=>'content',
			'type'=>'raw',
		), 
		array(
            'name'=>'priority',
            'type'=>'raw',
            'value'=>'CHtml::textField("priority[$data->id]",$data->priority,array("style"=>"width:50px;"))',
            'htmlOptions'=>array("width"=>"50px"),
        ),
		//'priority',
		/*
		'is_published',
		'create_time',
		'update_time',
		'news_time',
		*/
		array(
            'name'=>'is_published',
            'header'=>'Published',
            'filter'=>array('1'=>'Yes','0'=>'No'),
           // 'value'=>'($data->is_published=="1")?("Yes"):("No")'
		    'value' => function($data){  
				echo CHtml::ajaxSubmitButton(($data->is_published=="1")?("Unactive"):("Active"),array('/news/manageNews/ajaxactive/','id'=>$data->id), array('success'=>'reloadGrid'),array('class'=>($data->is_published=="1")?('label-warning'):('label-success'), 'style'=>'border: 0'));
			},
        ),
		array(
			'class'=>'CButtonColumn',
			'header' => 'Actions'
		),
	),
)); ?>

<script>
function reloadGrid(data) {
    $.fn.yiiGridView.update('news-grid');
}

function orderReloadGrid(data) {
	location.reload();
}
</script>

<?php echo CHtml::ajaxSubmitButton('Filter',array('/news/manageNews/ajaxupdate'), array(),array("style"=>"display:none;")); ?>
<?php echo CHtml::ajaxSubmitButton('Activate',array('/news/manageNews/ajaxupdate','act'=>'doActive'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('In Activate',array('/news/manageNews/ajaxupdate','act'=>'doInactive'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('Delete',array('/news/manageNews/ajaxupdate','act'=>'doDelete'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('Update sort order',array('/news/manageNews/ajaxupdate','act'=>'doSortOrder'), array('success'=>'orderReloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>

<?php $this->endWidget(); ?>
