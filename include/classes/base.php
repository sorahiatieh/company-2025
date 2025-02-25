<?php
	class Base{
		private static $siteTitle="";
		private static $siteKeywords="";
		private static $siteDescription="";
		private static $pageType="page";
		
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