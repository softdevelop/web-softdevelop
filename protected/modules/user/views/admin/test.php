<h1>View User <?php echo $model->username; ?></h1>
<?php
    $this->widget('editable.EditableDetailView', array(
		'data'       => $model,
		
		//you can define any default params for child EditableFields 
		'url'        => $this->createUrl('/user/admin/ajaxEdit'), //common submit url for all fields
		'params'     => array('YII_CSRF_TOKEN' => Yii::app()->request->csrfToken), //params for all fields
		'emptytext'  => 'no value',
		//'apply' => false, //you can turn off applying editable to all attributes
		  
		'attributes' => array(
			array(
				'name' => 'username',
				'editable' => array(
					'type'       => 'text',
					'inputclass' => 'input-large',
					'emptytext'  => 'special emptytext',                
					'validate'   => 'function(value) {
						if(!value) return "User Name is required (client side)"
					}'
				)
			),
			array(
				'name' => 'email',
				'editable' => array(
					'type'       => 'text',
					'inputclass' => 'input-large',
					'emptytext'  => 'special emptytext',                
					'validate'   => 'function(value) {
						if(!value) return "Email is required (client side)"
					}'
				)
			),
			
		)
		)
	);
?>