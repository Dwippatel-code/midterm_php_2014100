<?php

class customer{
    private $username = "";
    private $password = "";
    private $firstname = "";
    private $lastname = "";
    private $address = "";
    private $city = "";
    private $province = "";
    private $postalcode = "";
}

function getUsername() {
    return $this->username;
}

 function getPassword() {
    return $this->password;
}

 function getFirstname() {
    return $this->firstname;
}

 function getLastname() {
    return $this->lastname;
}

 function getAddress() {
    return $this->address;
}

 function getCity() {
    return $this->city;
}

 function getProvince() {
    return $this->province;
}

 function getPostalcode() {
    return $this->postalcode;
}

 function setUsername($username): void {
    $this->username = $username;
}

 function setPassword($password): void {
    $this->password = $password;
}

 function setFirstname($firstname): void {
    $this->firstname = $firstname;
}

 function setLastname($lastname): void {
    $this->lastname = $lastname;
}

 function setAddress($address): void {
    $this->address = $address;
}

 function setCity($city): void {
    $this->city = $city;
}

 function setProvince($province): void {
    $this->province = $province;
}

 function setPostalcode($postalcode): void {
    $this->postalcode = $postalcode;
}



