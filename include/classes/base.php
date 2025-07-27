<?php
	class Base extends UnitBase {
		
		private static $siteKeywords="";
		private static $siteDescription="";
		
		public static $data=array();
		
		private static $isCustomPage=false;
		private static $hasView=false;
		
		/**
		 * @return bool
		 */
		public static function getHasView(){
			return self::$hasView;
		}
		
		/**
		 * @param bool $hasView
		 */
		public static function setHasView($hasView){
			self::$hasView=$hasView;
		}
		
		/**
		 * @return bool
		 */
		public static function getIsCustomPage(){
			return self::$isCustomPage;
		}
		
		/**
		 * @param bool $isCustomPage
		 */
		public static function setIsCustomPage($isCustomPage){
			self::$isCustomPage=$isCustomPage;
		}
		
		
		
		/**
		 * @return string
		 */
		public static function getSiteKeywords(){
			return self::$siteKeywords;
		}
		
		/**
		 * @param string $siteKeywords
		 */
		public static function setSiteKeywords($siteKeywords){
			self::$siteKeywords=$siteKeywords;
		}
		
		/**
		 * @return string
		 */
		public static function getSiteDescription(){
			return self::$siteDescription;
		}
		
		/**
		 * @param string $siteDescription
		 */
		public static function setSiteDescription($siteDescription){
			self::$siteDescription=$siteDescription;
		}
		
		
		
		
		/**
		 * @return mixed
		 */
		public static function getPageDetails(){
			return self::$data['_page_details'];
		}
		
		public static function setPageDetails($name,$value){
			self::$data['_page_details'][$name]=$value;
		}
	}
	
?>