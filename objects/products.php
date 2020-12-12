<?php

require_once 'Data/database-connection.php';
require_once 'objects/collection.php';
require_once 'objects/product.php';

class products extends collection {

    function __construct() {
        
        global $connection;

        $sqlQuery = "CALL product_select()";
        $PDOStatement = $connection->prepare($sqlQuery);

        $PDOStatement->execute();

        while ($row = $PDOStatement->fetch(PDO::FETCH_ASSOC)) {
            $product = new product($row["product_uuid"], $row["product_code"], $row["description"], $row["price"]);
            $this->add($row["product_uuid"], $product);
        }
    }

}
