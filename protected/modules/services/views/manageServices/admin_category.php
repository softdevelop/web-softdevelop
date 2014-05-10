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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'service-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'name',
		'alias',
		array(
				'name'=>'category_id',
				'value'=>'GxHtml::valueEx($data->category)',
				'filter'=>GxHtml::listDataEx(ServiceCategory::model()->findAllAttributes(null, true)),
				),
		'description',
		'content',
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
			'class' => 'CButtonColumn',
			'template'=>'{viewnews}{update}{view}{delete}',
			 'buttons'=>array
				(
					'viewnews' => array
					(
						'label'=>'View all News belong to this Category',
						'imageUrl'=>Yii::app()->request->baseUrl.'/wwwroot/upload_files/faq.png',
						'url'=>'Yii::app()->createUrl("products/ManageProducts/ProductsInCategory", array("category_id"=>$data->id))',
					),
					
				),
			
		),
	),
)); ?>