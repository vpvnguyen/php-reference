<?php
    class Person {
        private $name;
        private $email;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created<br>';
        }

        public function __destruct() {
            echo __CLASS__.' destroyed<br>';
        }

        public function getName() {
            return $this->name.'<br>';
        }

        public function getEmail() {
            return $this->email.'<br>';
        }
    }

    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance) {
            // call parent constructor
            parent::__construct($name, $email, $balance);
            
            // set property
            $this->balance = $balance;

            echo 'A new '.__CLASS__.' has been created<br>';
        }

        public function setBalance($balance) {
            $this->balance = $balance;
        }

        public function getBalance() {
            return $this->balance.'<br>';
        }
    }

    // create a new customer using Person class to define customer with a balance
    $customer1 = new Customer('Vincent', 'test@gmail.com', 300);

    echo $customer1->getBalance(); // 300
    echo $customer1->getName(); // Vincent
?>