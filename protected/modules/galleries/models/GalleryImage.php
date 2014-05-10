<?php

Yii::import('application.modules.galleries.models._base.BaseGalleryImage');

class GalleryImage extends BaseGalleryImage
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}