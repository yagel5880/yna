<?php 

    function getIntArray($arr = []) {

        if(!is_array($arr)) return false;

        foreach ($arr as $k=>$v) {

            if(!is_integer($v)) unset($arr[$k]); 
        }

        return $arr ;
    }

    print_r(getIntArray([1, '5', 'a', 'b', 2]));
?>