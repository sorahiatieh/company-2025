<?php
	class Head {
		private static $scripts=array();
		private static $stylesheets=array();
		
		/**
		 * @param $path
		 * @return void
		 */
		static function addScript($path){
			if(!in_array($path, self::$scripts)){
				self::$scripts[]=$path;
			}
		}
		
		/**
		 * @param $path
		 * @return void
		 */
		static function addStylesheet($path){
			if(!in_array($path, self::$stylesheets)){
				self::$stylesheets[]=$path;
			}
		}
		
		/**
		 * @return void
		 */
		static function makeHeadScripts(){
			foreach(self::$scripts as $item){
				echo "<script src='$item'></script>\r\n\t";
			}
		}
		
		/**
		 * @return void
		 */
		static function makeHeadStylesheets(){
			foreach(self::$stylesheets as $item){
				echo "<link rel='stylesheet' href='$item' />\r\n\t";
			}
		}
		
		/**
		 * @return void
		 */
		static function makeHead(){
			self::makeHeadStylesheets();
			self::makeHeadScripts();
		}
	}
