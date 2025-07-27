<?php
	class UnitBase extends Base {
		private static $siteTitle="";
		private static $pageName="";
		private static $pageType="page";
		
		
		
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
		
		/**
		 * @return string
		 */
		public static function getPageType(){
			return self::$pageType;
		}
		
		/**
		 * @param string $pageType
		 */
		public static function setPageType($pageType){
			self::$pageType=$pageType;
		}
	}
	
?>