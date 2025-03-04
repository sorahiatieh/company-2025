<?php
	class Base{
		private static $siteTitle="";
		private static $siteKeywords="";
		private static $siteDescription="";
		private static $pageType="page";
		public static $data=array();
		private static $pageName="";
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