<ul>
	<?php foreach ($project as $value):?>
		<li>
			<a href="<?php echo Yii::app()->createUrl('/project/'.$value->alias)?>"><?php echo $value->title;?></a>
		</li>	
	<?php endforeach;?>
</ul>