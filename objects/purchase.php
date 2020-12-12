<?php
include 'objects/products.php';
class purchase{   
    
    private $username = "";
    private $productCode = "";
    private $quantity = 0;
    private $price = 0.0;
    private $subtotal = 0.0;
    private $taxes = 0.0;
    private $grandtotal = 0.0;
    private $comment = "";
    
    function getUsername() {
        return $this->username;
    }

    function getProductCode() {
        return $this->productCode;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getPrice() {
        return $this->price;
    }

    function getSubtotal() {
        return $this->subtotal;
    }

    function getTaxes() {
        return $this->taxes;
    }

    function getGrandtotal() {
        return $this->grandtotal;
    }

    function getComment() {
        return $this->comment;
    }

    function setUsername($username){
        $this->username = $username;
    }

    function setProductCode($productCode) {
        $this->productCode = $productCode;
    }

    function setQuantity($quantity){
        $this->quantity = $quantity;
    }

    function setPrice($price){
        $this->price = $price;
    }

    function setSubtotal($subtotal){
        $this->subtotal = $subtotal;
    }

    function setTaxes($taxes){
        $this->taxes = $taxes;
    }

    function setGrandtotal($grandtotal){
        $this->grandtotal = $grandtotal;
    }

    function setComment($comment){
        $this->comment = $comment;
    }

    
}

