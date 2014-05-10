<?php

Yii::import('application.modules.banners.models._base.BaseBanner');

class Banner extends BaseBanner
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}