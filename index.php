<?php
require_once __DIR__ ."/Models/Category.php";
require_once __DIR__ ."/Models/Product.php";
require_once __DIR__ ."/Models/Food.php";
require_once __DIR__ ."/Models/Toy.php";
require_once __DIR__ ."/Models/Bed.php";

$cat = new Category("cat");
$dog = new Category("dog");

$kibbles = new Food("kibblesName", 8, $cat, "15x45x10", "1000", "dry");
var_dump($kibbles);

$toy = new Toy("ToyName", 17, $dog, "30x10", "0.35", "rope");
var_dump($toy);

$bed = new Bed("BedName", 26, $cat, "60x40x25", "0.4", "rectangular");
var_dump($bed);