<?php

class product {

    private $product_id = "";
    private $productCode = "";
    private $description = "";
    private $price = 0.0;
    private $cost = 0.0;

    public function __construct($product_uuid = "", $productcode = "", $description = "", $price = 0.0) {
        if ($product_uuid != "") {
            $this->product_id = $product_uuid;
            $this->productCode = $productcode;
            $this->description = $description;
            $this->price = $price;
        }
    }

    function getProduct_id() {
        return $this->product_id;
    }

    function getProductCode() {
        return $this->productCode;
    }

    function getDescription() {
        return $this->description;
    }

    function getPrice() {
        return $this->price;
    }

    function getCost() {
        return $this->cost;
    }
    function setProduct_id($product_id){
        $this->product_id = $product_id;
    }

        function setProductCode($productCode) {
        $this->productCode = $productCode;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setCost($cost) {
        $this->cost = $cost;
    }

}
