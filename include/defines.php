<?php
	defined("_AST") or die("Access denied");
	
	define("PAGE_PATH",realpath(dirname(__FILE__).'/../pages').'/');
	define("SECTIONS",realpath(dirname(__FILE__).'/../pages/sections/').'/');
	define("REQUIRE_PATH",realpath(dirname(__FILE__).'/../pages/requires/').'/');
	
	//define("SITE_URL","http://localhost/Projects/company-2025/");
	define('SITE_URL',$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/Projects/company-2025/');


