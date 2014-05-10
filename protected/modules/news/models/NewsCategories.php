<?php

Yii::import('application.modules.news.models._base.BaseNewsCategories');

class NewsCategories extends BaseNewsCategories
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