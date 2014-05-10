<?php

Yii::import('application.modules.products.models._base.BaseCategory');

class Category extends BaseCategory
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	public function behaviors()
	{
	return array(
	   'NestedSetBehavior'=>array(
		   'class'=>'ext.treeview.NestedSetBehavior',
		   'leftAttribute'=>'lft',
		   'rightAttribute'=>'rgt',
		   'levelAttribute'=>'level',
		   'hasManyRoots'=>true
		   ),
	);
	}
}