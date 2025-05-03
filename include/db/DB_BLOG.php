<?php
	class DB_BLOG extends DB{
		protected $table_name="tbl_blogs";
		
		/*function __construct(){
			$this->table_name="tbl_blogs";
		}
		*/
		function getURL($id){
			$Details=$this->setWheres(array(
				"id"=>$id
			))->setReturnFields(array(
				"title",
			))->getDetails();
			
			if(empty($Details))
				return "blog/".$id;
			
			return 'blog/'.$id.text2url($Details['title']);
		}
		
		function getURLWithTitle($id,$title){
			return 'blog/'.$id.text2url($title);
		}
	}
