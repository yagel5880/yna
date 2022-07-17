<?php 

    class Person {
        
        public static $height;
        public static $weight;
        
        private function __construct($height, $weight) {
            
            self::$height = $height;
            self::$weight = $weight;
        }

        public static function getAverageHeight($persons = []) {

            if(!is_array($persons) || count($persons) == 0 )  return 0;
            $calc = 0;

            foreach ($persons as $v) {

                $calc += $v;
            }

            return $calc/count($persons);
        }
    }

    $persons = [ Person::$height = 1 , Person::$height = 4 , Person::$height = 5 ];

    echo $test = Person::getAverageHeight($persons);


?>