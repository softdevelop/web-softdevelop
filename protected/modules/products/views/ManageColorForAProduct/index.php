<?php

$this->breadcrumbs = array(
	ProductImage::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . ProductImage::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . ProductImage::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(ProductImage::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 