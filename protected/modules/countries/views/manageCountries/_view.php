<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('c_code')); ?>:
	<?php echo GxHtml::encode($data->c_code); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('order')); ?>:
	<?php echo GxHtml::encode($data->order); ?>
	<br />

</div>