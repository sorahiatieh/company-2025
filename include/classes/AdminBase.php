<?php
	class AdminBase extends Base {
		private static $siteTitle="";
		
		public static $data=array();
		private static $pageName="";
		
		
		
		
		/**
		 * @return string
		 */
		public static function getPageName(){
			return self::$pageName;
		}
		
		/**
		 * @param string $pageName
		 */
		public static function setPageName($pageName){
			self::$pageName=$pageName;
		}
		/**
		 * @return string
		 */
		public static function getSiteTitle(){
			return self::$siteTitle;
		}
		
		/**
		 * @param string $siteTitle
		 */
		public static function setSiteTitle($siteTitle){
			self::$siteTitle=$siteTitle;
		}
		
		/**
		 * @param $page_name
		 * @param $data
		 * @return void
		 */
		public static function setData($page_name,$data){
			self::$data[$page_name]=$data;
		}
		
		/**
		 * @param $page_name
		 * @return mixed
		 */
		public static function getData($page_name){
			return self::$data[$page_name];
		}
	}
	
?>