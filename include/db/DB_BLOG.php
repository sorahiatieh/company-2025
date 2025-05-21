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
			))->getDetails()->run();
			
			if(empty($Details))
				return "blog/".$id;
			
			return 'blog/'.$id.text2url($Details['title']);
		}
		
		function getURLWithTitle($id,$title){
			return 'blog/'.$id.text2url($title);
		}
		
		function search($input){
			$q="
				select * from tbl_blogs
				where (`title` LIKe '%$input%' OR fnStripTags(`text`) LIKE  '%$input%') AND `enable`=1
			";
			$this->setSQL($q)->setCommandType(DB::TYPE_LIST);
			return $this;
		}
	}
