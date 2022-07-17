<?php 

    function findLastKey($arr = [] , $key = '') {

        $data = '';
        foreach ($arr as $k=>$v) {
            if($v == $key) $data = $k;
        } 
        return $data;
    }

    echo findLastKey(['Hello' => 'Green', 'PHP' => 'Blue', 'World' => 'Blue'], 'Blue');

    
?>