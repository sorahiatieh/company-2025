<?php
	class DB_SETTING extends DB{
		protected $table_name="tbl_settings";
		/**
		 * @param $name
		 * @return mixed|string
		 */
		function getSetting($name){
			$Details=$this->setWheres(array(
				"name"=>$name
			))->setReturnFields(array(
				"value"
			))->getDetails()->run();
			
			if(empty($Details)){
				return  '';
			}
			
			return $Details['value'];
		}
	}
