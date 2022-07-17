<?php

    function sortByPriceAscending($str = '') {
        
        $arr = json_decode($str, 1);

        asort($arr);
        usort($arr, function ($a, $b) {return ($a['price'] < $b['price']) ? -1 : 1;});
        
        return  json_encode($arr);
    }

    print_r(sortByPriceAscending('[{"name":"eggs","price":1},{"name":"coffee","price":9.99},{"name":"rice","price":4.04}]'));

?>