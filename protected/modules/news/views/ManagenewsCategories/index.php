<?php

$this->breadcrumbs = array(
	NewsCategories::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . NewsCategories::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . NewsCategories::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(NewsCategories::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 