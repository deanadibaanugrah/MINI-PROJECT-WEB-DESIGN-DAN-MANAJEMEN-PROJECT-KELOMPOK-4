<?php
class User {
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $address;

    public function __construct($fName, $lName, $phone, $addr) {
        $this->firstName = htmlspecialchars($fName);
        $this->lastName = htmlspecialchars($lName);
        $this->phoneNumber = htmlspecialchars($phone);
        $this->address = htmlspecialchars($addr);
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }
}
?>