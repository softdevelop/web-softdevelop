<?php

Yii::import('application.modules.services.models._base.BaseService');

class Service extends BaseService
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
			)
		);
	}
}