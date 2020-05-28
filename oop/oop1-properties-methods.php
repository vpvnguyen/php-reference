<?php
    class Person {
        // properties / attributes
        // access modifiers: public, private, protected
        # public - access anywhere outside of class
        # private - within the class
        # protected - within the class or extended

        public $name;
        private $email;

        // methods

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            // $this references properties within the class; ex: this.name
            return $this->name;
        }
    }

    $person1 = new Person;
    
    // reference using ->; ex: person.name
    $person1->name = 'John Doe';
    $person1->email = 'john@test.com';

    // accessible; public
    echo $person1->name; // John Doe
    echo '<br>';
    // cannot access; private
    echo $person1->email; // Fatal error: Uncaught Error: Cannot access private property Person::$email

?>