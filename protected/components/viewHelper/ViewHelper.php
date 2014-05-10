<?php
class ViewHelper {
	public static function multiMenu($datas)
    {
		$arrData = array();
		foreach($datas as $data){
			$items = "";
			if($data->childCount) {
				//$parent=Category::model()->findByPk($data->id);
				$catDatas=$data->children()->findAll();
				$items = self::multiMenu($catDatas);
				$arrData[] = array(
					'label' => 	$data->name, 
					'url'	=>	Yii::app()->createUrl('/category/'.$data->alias), 
					'items'	=>	$items
				);
			} else 
				$arrData[] = array(
					'label' => 	$data->name, 
					'url'	=>	Yii::app()->createUrl('/category/'.$data->alias), 
				);
		}
		return $arrData;
    }
	public function humanTiming ($time)
	{
		$time = time() - $time; // to get the time since that moment

		$tokens = array (
			31536000 => 'year',
			2592000 => 'month',
			604800 => 'week',
			86400 => 'day',
			3600 => 'hour',
			60 => 'minute',
			1 => 'second'
		);

		foreach ($tokens as $unit => $text) {
			if ($time < $unit) continue;
			$numberOfUnits = floor($time / $unit);
			return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
		}
	}
	public function limit_text($text, $limit) {
		if (str_word_count($text, 0) > $limit) {
			$words = str_word_count($text, 2);
			$pos = array_keys($words);
			$text = substr($text, 0, $pos[$limit]) . '...';
		}
		return $text;
    }
}