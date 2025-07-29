<?php
	class AdminBase extends UnitBase {
		private static $subPage="";
		private static $adminData=array();
		/**
		 * @return string
		 */
		public static function getSubPage(){
			return self::$subPage;
		}
		
		/**
		 * @param string $subPage
		 */
		public static function setSubPage($subPage){
			self::$subPage=$subPage;
		}
		
		/**
		 * @param $page_name
		 * @param $data
		 * @return void
		 */
		public static function setPageData($page_name,$sub_page,$adminData){
			self::$data[$page_name][$sub_page]=$adminData;
		}
		
		/**
		 * @param $page_name
		 * @return mixed
		 */
		public static function getPageData($page_name,$sub_page){
			return self::$data[$page_name][$sub_page];
		}
		
	}
	
?>