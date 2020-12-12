<?php

require_once 'Data/database-connection.php';

//database 
define("NAME_MAX_LENGTH", 20);
define("LOCATION_MAX_LENGTH", 25);
define("POSTAL_CODE_MAX_LENGTH", 7);
define("USERNAME_MAX_LENGTH", 12);

class customer {

    private $username = "";
    private $password = "";
    private $firstname = "";
    private $lastname = "";
    private $address = "";
    private $city = "";
    private $province = "";
    private $postalcode = "";
    private $customer_uuid = "";

    public function __construct($username = "", $password = "", $firstname = "", $lastname = "", $address = "", $city = "", $province = "", $postal = "") {
        if ($username != "") {

            $this->username($username);
            $this->password($password);
            $this->firstname($firstname);
            $this->lastname($lastname);
            $this->address($address);
            $this->city($city);
            $this->province($province);
            $this->postalcode($postal);
        }
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

    function setUsername($username) {
        if (mb_strlen($username) == 0) {
            return 'Username cannot be empty';
        } else {
            if (mb_strlen($username) > USERNAME_MAX_LENGTH) {
                return 'Username cannot contain more than ' .
                        USERNAME_MAX_LENGTH . ' characters ';
            } else {
                $this->username = $username;
                return " ";
            }
        }
    }

    function setPassword($password) {
        if (mb_strlen($password) == 0) {
            return 'Username cannot be empty';
        } else {
            $this->password = $password;
            return " ";
        }
    }

    function setFirstname($firstname) {
        if (strlen($firstname) > CHAR_SIZE + 10) {
            return "The first name contains more than 20 ";
        } else if (strlen($firstname) == 0) {
            return "The first name cannot be empty ";
        } else {
            $this->firstname = $firstname;
            return " ";
        }
    }

    function setLastname($lastname) {
        if (strlen($lastname) > CHAR_SIZE + 10) {
            return "The last name contains more than 20 ";
        } else if (strlen($lastname) == 0) {
            return "<br>The last name cannot be empty ";
        } else {
            $this->lastname = $lastname;
            return " ";
        }
    }

    function setAddress($address) {
        if (strlen($address) > CHAR_SIZE + 15) {
            return "The last name contains more than 20 ";
        } else if (strlen($address) == 0) {
            return "<br>The last name cannot be empty ";
        } else {
            $this->address = $address;
            return " ";
        }
    }

    function setCity($city) {
        if (strlen($city) > CHAR_SIZE + 10) {
            return "<br>The city contains more than 8 characters ";
        } else if (strlen($city) == 0) {
            return "<br>The city cannot be empty ";
        } else {
            $this->city = $city;
            return " ";
        }
    }

    function setProvince($province) {
        if (strlen($province) > CHAR_SIZE + 15) {
            return "<br>The city contains more than 8 characters ";
        } else if (strlen($province) == 0) {
            return "<br>The city cannot be empty ";
        } else {
            $this->province = $province;
            return " ";
        }
    }

    function setPostalcode($postalcode) {

        if (strlen($postalcode) > CHAR_SIZE - 3) {
            return "<br>The city contains more than 8 characters ";
        } else if (strlen($postalcode) == 0) {
            return "<br>The city cannot be empty ";
        } else {
            $this->postalcode = $postalcode;
            return " ";
        }
    }

  

    public function load($customer_uuid) {
        global $connection;

        $sqlQuery = "CALL customer_select(:pk)";

        $PDOStatement = $connection->prepare($sqlQuery);

        $PDOStatement->bindParam(':pk', $customer_uuid);

        $PDOStatement->execute();

        if ($row = $PDOStatement->fetch(PDO::FETCH_ASSOC)) {
            $this->customer_uuid = $row['customer_id'];
            $this->firstname = $row['firstname'];
            $this->username = $row['username'];

            return true;
        }
    }

    public function save() {
        try {
            global $connection;

//            if ($this->customer_uuid == "") {

                $sqlQuery = "CALL customer_insert(:p_username, :p_password, :p_firstname, :p_lastname, :p_address, :p_city, :p_province, :p_postalcode)";

                $PDOStatement = $connection->prepare($sqlQuery);


                $PDOStatement->bindParam(':p_firstname', $this->firstname);
                $PDOStatement->bindParam(':p_lastname', $this->lastname);
                $PDOStatement->bindParam(':p_address', $this->address);
                $PDOStatement->bindParam(':p_city', $this->city);
                $PDOStatement->bindParam(':p_province', $this->province);
                $PDOStatement->bindParam(':p_postalcode', $this->postalcode);
                $PDOStatement->bindParam(':p_username', $this->username);
                $PDOStatement->bindParam(':p_password', $this->password);

                $PDOStatement->execute();

                return true;
//            } else {

//                $sqlQuery = "CALL customer_update(:p_customer_uuid, :p_username, :p_password, :p_firstname, :p_lastname, :p_address, :p_city, :p_province, :p_postalcode)";
//
//                $PDOStatement = $connection->prepare($sqlQuery);
//
//                $PDOStatement->bindParam(':p_customer_uuid', $this->customer_uuid);
//                $PDOStatement->bindParam(':p_firstname', $this->firstname);
//                $PDOStatement->bindParam(':p_lastname', $this->lastname);
//                $PDOStatement->bindParam(':p_username', $this->username);
//                $PDOStatement->bindParam(':p_password', $this->password);
//
//                $PDOStatement->execute();
//
//                return true;
//            }
        } catch (Exception $e) {
            var_dump($e);
        }
    }

    public function delete() {
        global $connection;

        $sqlQuery = "CALL customer_delete(:customer_uuid)";

        $PDOStatement = $connection->prepare($sqlQuery);

        $PDOStatement->bindParam(':person_uuid', $this->customer_uuid);

        $affectedRows = $PDOStatement->execute();

        return $affectedRows;
    }

}
