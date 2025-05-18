<?php
	class DB_PAGE extends DB {
		protected $table_name="tbl_pages";
		function getLinkTitle($pagename){
			$PageDetails = $this->setWheres(array(
				"name"=>$pagename
			))->getDetails()->run();
			
			if(empty($PageDetails)){
				return "";
			}
			return $PageDetails['link_title'];
		}
		
		function getURL($page){
			return 'pages/'.$page.text2url($this->getLinkTitle($page));
		}
		
		function getURLWithTitle($page_name,$title){
			return 'pages/'.$page_name.text2url($title);
		}
	}