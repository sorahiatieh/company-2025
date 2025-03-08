<?php
class Validator {
	static function isNumber($input){
            $pattern="/^([0-9]+)$/";
            if(preg_match($pattern,$input)){
                return true;
            
            return false;
            }
        }
        
        static function is_az09_($input){
            $pattern="/^([a-z0-9_]+)$/";
            if (preg_match($pattern,$input))
                return true;
            
            return false;
        }
}
?>
