<?php


    function requiredVal($input){
        if(empty($input)){
            return true;
        }
        return false;
    }

    function minVal($input,$length){
        if(strlen($input) < $length){
            return true;
        }
        return false;
    }

    function maxVal($input,$length){
        if(strlen($input) > $length){
            return true;
        }
        return false;
    }

 

    function emailVal($input){
        if(!filter_var($input,FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

 



?>
