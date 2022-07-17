<?php
 

    function numbersToLetters($str = '') {
        
        $letters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $arr = explode('+',$str);
        $worlds = '';
        foreach ($arr as $v) {
            $chars = explode(' ',$v);
            $worlds .=' ';
            foreach ($chars as $char) {
                $worlds .= $letters[$char-1];
            }

        }

        return trim($worlds);
    }

    print_r( numbersToLetters('8 5 12 12 15+23 15 18 12 4'));

?>