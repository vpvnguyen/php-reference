<?php
    class Person {
        // properties
        private $name;
        private $email;

        // constructor
        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created<br>';
        }

        // deconstructor
        public function __destruct() {
            echo __CLASS__.' destroyed<br>';
        }

        // methods
        public function getName() {
            return $this->name.'<br>';
        }

        public function getEmail() {
            return $this->email.'<br>';
        }
    }

    class User extends Person {
        private $username;
        private $password;
        public static $ageMin = 18;

        // construct new User using Person class
        // pass in all required properties
        public function __construct($name, $email, $username, $password) {

            // pass properties into parent class of Person
            parent::__construct($name, $email, $username, $password);

            // set new User properties
            $this->username = $username;
            $this->password = $password;

            echo 'A new '.__CLASS__.' has been created<br>';
        }

        // methods
        public function getUsername() {
            return $this->username.'<br>';
        }

        private function getPassword() {
            return $this->password.'<br>';
        }

        public function getPasswordPublic() {
            return $this->getPassword().'<br>';
        }

        public static function getAgeMin() {
            return self::$ageMin.'<br>';
        }
    }

    $person = new Person('John', 'john@test.com');
    $user = new User('Vincent', 'vince@test.com', 'myUserName', 'mySecretPassword');

    echo '<h1>Person Class</h1>';
    echo $person->getName(); // John
    echo $person->getEmail(); // john@test.com

    echo '<h1>User Class extends Person</h1>';
    echo User::getAgeMin(); // 18
    echo $user->getUsername(); // myUserName
    echo $user->getPasswordPublic(); // mySecretPassword
    echo $user->getPassword(); // Fatal error: Uncaught Error: Call to private method User::getPassword() from context
?>