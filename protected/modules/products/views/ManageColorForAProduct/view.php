<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>'Update' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>'Delete' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo 'View' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'id',
		array(
					'name' => 'product',
					'type' => 'raw',
					'value' => $model->product !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->product)), array('products/view', 'id' => GxActiveRecord::extractPkValue($model->product, true))) : null,
					),
		'name',
		//'image',
		array(
					'label'=>'image',
					'type' => 'raw',
					'value' => CHtml::image(Yii::app()->CreateUrl('/') .'/wwwroot/upload_files/products/colors/' .$model->image,'alt', array('class'=>"view_image")),
				),
		'description',
		'priority',
		'is_published:boolean',
		'create_time',
		'update_time',
		'color',
			),
)); ?>

