<?php

Yii::import('application.modules.countries.models._base.BaseCountry');

class Country extends BaseCountry
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}