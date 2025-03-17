<?php
	class NotFound extends Exception{
		private static $contentMassage="صفحه مورد نظر یافت نشد!";
		
		function __construct($matn=""){
			if($matn !="")
				self::$contentMassage=$matn;
		}
		
		static function getContentMassage(){
			return self::$contentMassage;
		}
	}
