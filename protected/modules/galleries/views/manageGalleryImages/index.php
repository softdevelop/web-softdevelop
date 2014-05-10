<?php

$this->breadcrumbs = array(
	GalleryImage::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . GalleryImage::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . GalleryImage::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(GalleryImage::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 