<?php

$this->breadcrumbs = array(
	ProductCategory::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . ProductCategory::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . ProductCategory::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(ProductCategory::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 