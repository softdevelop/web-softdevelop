<?php
function baseTheme(){
	return Yii::app()->request->baseUrl."/themes/".Yii::app()->theme->name;
}



function jlOut($obj, $dataType = 'json', $exit = true) {
	// dataType: json, text
	error_reporting(0);
	$category = "Slidelane";
	if(!empty(Yii::app()->name)){
		$category = Yii::app()->name;
	}
	
	if(!empty($obj['message'])){
		$obj['message'] = Yii::t($category,$obj['message']);
	}
	if(!empty($obj['msg'])){
		$obj['msg'] = Yii::t($category,$obj['msg']);
	}
	
	$obj = @CJSON::encode($obj);
	$gzContent = gzencode($obj, 5);
	
	header('Connection: close');
	
	switch ($dataType) {
		case 'json':
			header("Content-type: application/json");
			break;
		case 'text':
			//header("Content-type: application/json");
			break;
	}
	
	if ($gzContent) {
		header('Content-Encoding: gzip');
		header('Vary: Accept-Encoding');
		header("Content-Length: ".strlen($gzContent));
		echo $gzContent;
		@ob_end_flush();
	} else {
		if (stripos($_SERVER['HTTP_ACCEPT_ENCODING'], "gzip") !== false) {
			header('Content-Encoding: gzip');
			header('Vary: Accept-Encoding');
			ob_start("ob_gzhandler");
		} else {
			ob_start();
		}
		
		echo $obj;
		$size = ob_get_length();
		//ob_end_flush();
		
		header("Content-Length: {$size}");
		
		@ob_end_flush();
		@ob_flush();
		
	}
	
	@flush();

	if ($exit) {
		if (YII_DEBUG) exit();
		else Yii::app()->end();
	} else {
		$session_id = session_id();
		if (session_id()) session_write_close();
		return $session_id;
	}
}
/**
 * This method is used to output a json string and terminate current process
 */
function jsonOut($obj, $exit = true) {
	jlOut($obj, 'json', $exit);
}

function ajaxOut($out) {
	if (!preg_match("/MSIE/", $_SERVER['HTTP_USER_AGENT'])) {
		jsonOut($out);
	} else {
		jlOut($out, 'text');
	}
}
function currentUser() {
	if(!Yii::app()->user->isGuest)
		return User::model()->findByPk(Yii::app()->user->id);
	else
		return false;
}
function dump($obj,$isExit = true) {
	CVarDumper::dump($obj,10,true);
	if ($isExit) exit();	
}
