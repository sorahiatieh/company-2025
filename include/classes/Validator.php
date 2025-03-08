<?php
class Validator {
    /**
     * @param $input
     * @return true|void
     */
	static function isNumber($input){
            $pattern="/^([0-9]+)$/";
            if(preg_match($pattern,$input)){
                return true;
            
            return false;
            }
        }
    
    /**
     * @param $input
     * @return bool
     */
        static function is_az09_($input){
            $pattern="/^([a-z0-9_]+)$/";
            if (preg_match($pattern,$input))
                return true;
            
            return false;
        }
}
?>
