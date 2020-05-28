<?php
    class Person {
        private $name;
        private $email;

        // constructors
        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            // __CLASS__ = name of the class
            echo __CLASS__.' created<br>';
        }

        // deconstructor
        public function __destruct() {
            echo __CLASS__.' destroyed<br>';
        }

        public function getName() {
            return $this->name;
        }

        public function getEmail() {
            return $this->email;
        }
    }

    // create person and destroy
    $person1 = new Person('Vincent', 'test@gmail.com'); // Person created

    echo $person1->getName(); // Vincent
    echo '<br>';
    echo $person1->getEmail(); // test@gmail.com
    echo '<br>';

    // (class will be destroyed)
    // Person destroyed
?>