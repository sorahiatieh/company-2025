<?php
	class DB_PAGE extends DB {
		protected $table_name="tbl_pages";
		function getLinkTitle($pagename){
			$PageDetails = $this->setWheres(array(
				"name"=>$pagename
			))->getDetails();
			
			if(empty($PageDetails)){
				return "";
			}
			return $PageDetails['link_title'];
		}
		
		function getURL($page){
			return 'pages/'.$page.text2url($this->getLinkTitle('$page'));
		}
	}