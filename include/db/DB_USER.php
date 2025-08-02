<?php
	class DB_USER extends DB {
		protected $table_name="tbl_users";
		
		static function isValidUsername($username) {
			return Validator::is_az09_($username);
		}
		
		static function hash($password){
			return md5($password);
		}

	};