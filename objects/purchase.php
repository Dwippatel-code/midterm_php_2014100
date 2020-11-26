<?php
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

    function setUsername($username): void {
        $this->username = $username;
    }

    function setProductCode($productCode): void {
        $this->productCode = $productCode;
    }

    function setQuantity($quantity): void {
        $this->quantity = $quantity;
    }

    function setPrice($price): void {
        $this->price = $price;
    }

    function setSubtotal($subtotal): void {
        $this->subtotal = $subtotal;
    }

    function setTaxes($taxes): void {
        $this->taxes = $taxes;
    }

    function setGrandtotal($grandtotal): void {
        $this->grandtotal = $grandtotal;
    }

    function setComment($comment): void {
        $this->comment = $comment;
    }

    
}

