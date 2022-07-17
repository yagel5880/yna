<?php 

    namespace SessionProvider;

    function appendRand(): void {

        if (isset($_COOKIE['data'])) {
            $data = $_COOKIE['data'];
        } else {
            $data = "";
        }

        $serialized_data = serialize($data);    
        $size = (strlen($serialized_data) * 8 / 1024);
        
        if($size >= 4)  $data = substr($data, 1);
            
        $data .= rand(0, 9);
        setcookie('data', $data);
    }

    print_r(appendRand());
?>