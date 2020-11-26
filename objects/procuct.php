<?php

class product{
    private $productCode = "";
    private $description = "";
    private $price = 0.0;
    private $cost = 0.0;
    private $subtotal = 0.0;
    private $taxes = 0.0;
    private $grandtotal = 0.0;
    
    
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

    function getSubtotal() {
        return $this->subtotal;
    }

    function getTaxes() {
        return $this->taxes;
    }

    function getGrandtotal() {
        return $this->grandtotal;
    }

    function setProductCode($productCode): void {
        $this->productCode = $productCode;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function setPrice($price): void {
        $this->price = $price;
    }

    function setCost($cost): void {
        $this->cost = $cost;
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

    
}

