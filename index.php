<?php

if(!file_exists('./config/install.lock')){
	if(file_exists('./install/index.php')){
		header("location:./install/index.php");exit;
	}
	else{
		header("Content-type: text/html;charset=utf-8");
		echo "";
		die();
	}
}
define('M_NAME', 'index');
define('M_MODULE', 'web');
define('M_CLASS', 'index');
define('M_ACTION', 'doindex');
require_once './app/system/entrance.php';


?>
