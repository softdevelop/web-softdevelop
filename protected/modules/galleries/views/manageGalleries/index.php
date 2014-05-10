<?php

$this->breadcrumbs = array(
	Gallery::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Gallery::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Gallery::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Gallery::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 