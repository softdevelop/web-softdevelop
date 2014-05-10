<?php
/* @var $this StaticpageController */
/* @var $model StaticPage */

$this->breadcrumbs=array(
	'Static Pages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StaticPage', 'url'=>array('index')),
	array('label'=>'Create StaticPage', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#static-page-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Static Pages</h1>

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
<?php //dump($model->search());exit;?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'static-page-grid',
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
		//'image',
		array(
            'name'=>'image',
			'type' => 'raw',
            'value' => function($data){
				echo CHtml::image(Yii::app()->CreateUrl('/') .'/wwwroot/upload_files/staticpages/' .$data->image,'alt', array('class'=>"view_image_small"));
			},
			//'value' => Yii::app()->getModule('galleries')->_image["url"].$model->image,
        ),
		//'description',
		//'content',
		/*
		'position',
		'section',
		'show_on_index',
		'priority',
		'create_time',
		'update_time',*/
		//'is_published',
		array(
            'name'=>'is_published',
            'header'=>'Published',
            'filter'=>array('1'=>'Yes','0'=>'No'),
           // 'value'=>'($data->is_published=="1")?("Yes"):("No")'
		    'value' => function($data){  
				echo CHtml::ajaxSubmitButton(($data->is_published=="1")?("Unactive"):("Active"),array('/staticpages/staticpage/ajaxactive/','id'=>$data->id), array('success'=>'reloadGrid'),array('class'=>($data->is_published=="1")?('label-warning'):('label-success'), 'style'=>'border: 0'));
			},
        ),
		
		array(
            'name'=>'priority',
            'type'=>'raw',
            'value'=>'CHtml::textField("priority[$data->id]",$data->priority,array("style"=>"width:50px;"))',
            'htmlOptions'=>array("width"=>"50px"),
        ),
		
		array(
			'header' => 'Actions',
			'class'=>'CButtonColumn'
		),
	),
)); ?>


<script>
function reloadGrid(data) {
    $.fn.yiiGridView.update('static-page-grid');
}
function orderReloadGrid(data) {
	location.reload();
}
</script>

<?php echo CHtml::ajaxSubmitButton('Filter',array('/staticpages/staticpage/ajaxupdate'), array(),array("style"=>"display:none;")); ?>
<?php echo CHtml::ajaxSubmitButton('Activate',array('/staticpages/staticpage/ajaxupdate','act'=>'doActive'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('In Activate',array('/staticpages/staticpage/ajaxupdate','act'=>'doInactive'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('Delete',array('/staticpages/staticpage/ajaxupdate','act'=>'doDelete'), array('success'=>'reloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>
<?php echo CHtml::ajaxSubmitButton('Update sort order',array('/staticpages/staticpage/ajaxupdate','act'=>'doSortOrder'), array('success'=>'orderReloadGrid'),array('class'=>'buttonAdd','style'=>'border:0; margin-right:20px')); ?>

<?php $this->endWidget(); ?>
