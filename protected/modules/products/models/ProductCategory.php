<?php

Yii::import('application.modules.products.models._base.BaseProductCategory');

class ProductCategory extends BaseProductCategory
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	public function behaviors(){
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'create_time',
				'updateAttribute' => 'update_time',
			),
			'NestedSetBehavior'=>array(
			   'class'=>'ext.treeview.NestedSetBehavior',
			   'leftAttribute'=>'lft',
			   'rightAttribute'=>'rght',
			   'levelAttribute'=>'level',
			   'hasManyRoots'=>true
		   ),
		);
	}
}