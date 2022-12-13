<?php
require_once __DIR__ ."/Product.php";

class Bed extends Product
{
    public $shape;

    function __construct($name, $price, Category $category, $dimensions, $weight, $shape)
    {
        parent::__construct($name, $price, $category, $dimensions, $weight);
        $this->shape = $shape;
    }
}