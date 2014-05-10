<?php
/* @var $this StaticpageController */
/* @var $model StaticPage */

$this->breadcrumbs=array(
	'Static Pages'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List StaticPage', 'url'=>array('index')),
	array('label'=>'Create StaticPage', 'url'=>array('create')),
	array('label'=>'Update StaticPage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StaticPage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StaticPage', 'url'=>array('admin')),
);
?>

<h1>View StaticPage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'alias',
		//'image',
		array(
			'label'=>'image',
			'type' => 'raw',
			'value' => CHtml::image(Yii::app()->CreateUrl('/') .'/wwwroot/upload_files/staticpages/' .$model->image,'alt', array('class'=>"view_image")),
		),
		'description',
		'content',
		'position',
		'section',
		'show_on_index',
		'priority',
		'create_time',
		'update_time',
		'is_published',
	),
)); ?>
