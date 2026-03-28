<?php
class User {
    private $firstName;
    private $lastName;
    private $phoneNumber;
    private $address;

    public function __construct($fName, $lName, $phone, $addr) {
        $this->firstName = htmlspecialchars($fName);
        $this->lastName = htmlspecialchars($lName);
        $this->phoneNumber = htmlspecialchars($phone);
        $this->address = htmlspecialchars($addr);
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getUserInfo() {
        return [
            "nama" => $this->getFullName(),
            "phone" => $this->phoneNumber,
            "alamat" => $this->address
        ];
    }
}
?>
