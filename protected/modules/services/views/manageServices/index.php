<?php

$this->breadcrumbs = array(
	Service::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Service::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Service::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Service::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 