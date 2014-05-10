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
	$.fn.yiiGridView.update('gallery-image-grid', {
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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'gallery-image-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
			'name'=>'gallery_id',
			'value'=>'GxHtml::valueEx($data->gallery)',
			'filter'=>GxHtml::listDataEx(Gallery::model()->findAllAttributes(null, true)),
		),
		'name',
		//'image',
		 array(            // display 'create_time' using an expression
            'name'=>'image',
			'type' => 'raw',
            'value' => function($data){
				echo CHtml::image(Yii::app()->CreateUrl('/') .'/wwwroot/upload_files/galleries/images/' .$data->image,'alt', array('class'=>"view_image_small"));
			},
			//'value' => Yii::app()->getModule('galleries')->_image["url"].$model->image,
        ),
		'description',
		'create_time',
		/*
		'update_time',
		array(
					'name' => 'is_published',
					'value' => '($data->is_published === 0) ? \'No\' : \'Yes\'',
					'filter' => array('0' => 'No', '1' => 'Yes'),
					),
		'priority',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>