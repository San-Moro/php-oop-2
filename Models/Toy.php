<?php
require_once __DIR__ ."/Toy.php";

class Toy extends Product
{
    public $material;

    function __construct($name, $price, Category $category, $dimensions, $weight, $material)
    {
        parent::__construct($name, $price, $category, $dimensions, $weight);
        $this->material = $material;
    }
}