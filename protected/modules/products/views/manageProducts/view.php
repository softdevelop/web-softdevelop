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
		'name',
		'alias',
		'description',
		'content',
		//'image',
		array (
			'label'=>'image',
			'type'=>'raw',
			'value'=>CHtml::image(Yii::app()->createUrl('/').Yii::app()->controller->module->image['url'].$model->image,'alt',array('style'=>'max-width:400px;max-height:400px;')),
		),
		'price',
		'special_price',
		'quantity',
		'style',
		'priority',
		'is_special:boolean',
		'is_published:boolean',
		'create_time',
		'update_time',
	),
)); ?>
<div class="kunkun">
	<h1><?php echo CHtml::link('Manage media for  '.$model->alias , Yii::app()->createUrl('/products/ManageColorForAProduct/admin?product_id='.$model->id),array('style'=>'margin-top:1px;')) ?></h1>
</div>

<div class="kunkun">
	<h1><?php echo CHtml::link('Create more media for  '.$model->alias , Yii::app()->createUrl('/products/ManageColorForAProduct/create?product_id='.$model->id)) ?></h1>
</div>
<h2><?php //echo GxHtml::encode($model->getRelationLabel('productImages')); ?></h2>
<?php
	/*echo GxHtml::openTag('ul');
	foreach($model->productImages as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('productImages/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul'); */
?><h2><?php //echo GxHtml::encode($model->getRelationLabel('productMiddles')); ?></h2>
<?php
	/*echo GxHtml::openTag('ul');
	foreach($model->productMiddles as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('productMiddle/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul'); */
?>