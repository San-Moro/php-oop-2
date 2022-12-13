<?php
require_once __DIR__ ."/Product.php";

class Food extends Product
{
    public $type;

    function __construct($name, $price, Category $category, $dimensions, $weight, $type)
    {
        parent::__construct($name, $price, $category, $dimensions, $weight);
        $this->type = $type;
    }
}