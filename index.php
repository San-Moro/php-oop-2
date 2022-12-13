<?php
require_once __DIR__ ."/Models/Category.php";
require_once __DIR__ ."/Models/Product.php";

$cat = new Category("cat");
$dog = new Category("dog");

$prod = new Product("NameProduct", 15.90, new Category ("cat"), "20x55", "1500");