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
		'title',
		'alias',
	//'image',
		array(
			'label' => 'image',
			'type' => 'raw',
			'value' =>  CHtml::image(Yii::app()->createUrl('/').Yii::app()->controller->module->image['url'].$model->image,'alt', array ('style'=>'max-width:400px; max-height:400px;'))
		),
		'description',
		'content',
		'priority',
		'create_time',
		'update_time',
		'is_published:boolean',
	),
)); ?>

<h2><?php //echo GxHtml::encode($model->getRelationLabel('galleryImages')); ?></h2>
<?php
	/*echo GxHtml::openTag('ul');
	foreach($model->galleryImages as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('galleryImages/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul'); */
?>