<?php
	//$this->widget('application.components.firstWidget.MyWidget');
	/*$test = array('1' => 'One', '2' => 'Two', '3' => 'Three');
	$this->widget('zii.widgets.jui.CJuiAccordion',array(
		'panels'=>array(
			'panel 1'=>'content for panel 1',
			'panel 2'=>'content for panel 2',
			// panel 3 contains the content rendered by a partial view
			'panel 3'=>$this->renderPartial('_partial',null,true),
		),
		// additional javascript options for the accordion plugin
		'options'=>array(
			'animated'=>'bounceslide',
		),
	)); */
	

	
	 $this->widget(
		'chartjs.widgets.ChPolar', 
		array(
			'width' => 600,
			'height' => 300,
			'htmlOptions' => array(),
			'drawLabels' => true,
			'datasets' => array(
				array(
					"value" => 50,
					"color" => "yellow",
					"label" => "Open"
				),
				array(
					"value" => 45,
					"color" => "red",
					"label" => "Close"
				),
				array(
					"value" => 40,
					"color" => "blue",
					"label" => "ReOpen"
				),
			),
			'options' => array()
		)
	);   
    
    

?>