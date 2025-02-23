<?php
	class Base{
		private $siteTitle="";
		private $siteKeywords="";
		private $siteDescription="";
		private $pageType="page";
		
		/**
		 * @param $title
		 * @return void
		 */
		public function setSiteTitle($title){
			$this->siteTitle = $title;
		}
		
		/**
		 * @return string
		 */
		public function getSiteTitle(){
			return $this->siteTitle;
		}
		/**
		 * @param string $siteKeywords
		 */
		public function setSiteKeywords($siteKeywords){
			$this->siteKeywords=$siteKeywords;
		}
		/**
		 * @return string
		 */
		public function getSiteKeywords(){
			return $this->siteKeywords;
		}
		
		
		/**
		 * @param string $siteDescription
		 */
		public function setSiteDescription($siteDescription){
			$this->siteDescription=$siteDescription;
		}
		
		
		/**
		 * @return string
		 */
		public function getSiteDescription(){
			return $this->siteDescription;
		}
		
		/**
		 * @param string $pageType
		 */
		public function setPageType($pageType){
			$this->pageType=$pageType;
		}
		/**
		 * @return string
		 */
		public function getPageType(){
			return $this->pageType;
		}
	}
	
?>