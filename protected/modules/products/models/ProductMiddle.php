<?php

Yii::import('application.modules.products.models._base.BaseProductMiddle');

class ProductMiddle extends BaseProductMiddle
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}