<?php
	defined("_AST") or die("Access denied");
	
	spl_autoload_register('as_autoloader');
	
	function as_autoloader($class){
		
		$directories=array(
			"classes",
			"db",
            "exception"
		);
		
		foreach($directories as $item){
			if(file_exists(dirname(__FILE__).'/'.$item.'/'.$class.'.php')){
				require_once dirname(__FILE__).'/'.$item.'/'.$class.'.php';
				return;
			}
		}
	}
?>