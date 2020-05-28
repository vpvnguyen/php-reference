<?php
class Person {
    private $name;
    private $email;

    // using public functions, set and get private properties
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        return $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        return $this->email = $email;
    }
}

$person1 = new Person;

$person1->setName('Vincent');
$person1->setEmail('test@gmail.com');

echo $person1->getName(); // Vincent
echo '<br>';
echo $person1->getEmail();

?>