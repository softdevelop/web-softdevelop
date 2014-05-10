<?php 
	$this->widget('ext.QTreeGridView.CQTreeGridView', array(
		'id'=>'category-grid',
		// 'cssFile'=>false,
		'ajaxUpdate' => false,
		'dataProvider'=>$dataProvider,
		'filter'=>$model,
		'columns'=>array(
			'id',
			'name',
			'description',
			//'icon',
			//'parent_id',
			array(
				'name' => 'parent_id',
				'value'=>'(($data->parent_id==0)?"No Parent" :$data->parent_id)',
			),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{view}{update}{delete}',
				'buttons'=>array
				(
	 
	 
			),
		),
		),
	));
?>