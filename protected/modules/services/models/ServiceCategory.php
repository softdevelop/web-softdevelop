<?php

Yii::import('application.modules.services.models._base.BaseServiceCategory');

class ServiceCategory extends BaseServiceCategory
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