<?php

$this->breadcrumbs = array(
	ServiceCategory::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . ServiceCategory::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . ServiceCategory::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(ServiceCategory::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 