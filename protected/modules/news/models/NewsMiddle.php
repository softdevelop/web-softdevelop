<?php

Yii::import('application.modules.news.models._base.BaseNewsMiddle');

class NewsMiddle extends BaseNewsMiddle
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}