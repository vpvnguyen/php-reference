<?php
    class Person {
        private $name;
        private $email;

        // will not need to instantiate the class to use this property
        public static $ageLimit = 40;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created';
        }

        public function __destruct() {
            echo __CLASS__.' destroyed';
        }

        public function __getName() {
            return $this->name.'<br>';
        }

        public function __getEmail() {
            return $this->email.'<br>';
        }

        public static function getAgeLimit() {
            return self::$ageLimit.'<br>';
        }
    }

    echo Person::$ageLimit.'<br>'; // 40

    echo Person::getAgeLimit(); // 40
?>