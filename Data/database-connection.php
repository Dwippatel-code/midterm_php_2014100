<?php

$connection = new PDO("mysql:host=localhost;dbname=database_2014100","root","");
#make sure errors in the queries are also catched
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
