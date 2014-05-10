<?php

class TestController extends BController {

	public $layout = '//layouts/main';
	
	public function actionKhuong(){
	
		$this->render ('view',array(
			
		));
		
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Product'),
		));
	}
	
	public function actionDynamiccities(){
			
			//echo $_POST['country_id'];exit;
			//$data=Product::model()->findAll('id=:id', 
						//  array(':id'=>(int) $_POST['country_id']));
			$data=Product::model()->findAllByAttributes(array('id'=>2));		  
			//dump ($data);exit;
			
			
			$data=CHtml::listData($data,'id','name');
			foreach($data as $value=>$name)
			{
				echo CHtml::tag('option',
						   array('value'=>$value),CHtml::encode($name),true);
			}
	}

}