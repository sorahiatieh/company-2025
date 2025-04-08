<?php
	class Ajax extends Exception{
		public static $Status=0;
		public static $text="";
		
		public function makeOutput(){
			unset($this->xdebug_message);
			exit(json_encode($this,JSON_UNESCAPED_UNICODE));
		}
	}
