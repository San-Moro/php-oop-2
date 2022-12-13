<?php
require_once __DIR__ ."/Category.php";

class Product
{
    public $name;
    public $price;
    public $category;
    public $dimensions;
    public $weight;

    function __construct($name, $price, Category $category, $dimensions, $weight)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->dimensions = $dimensions;
        $this->weight = $weight;
    }
}