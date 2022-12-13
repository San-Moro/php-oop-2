<?php
require_once __DIR__ . "/Database/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Pets</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row cols-4">
        <?php foreach ($products as $product) { ?>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $product->name ?></h4>
                        <h5 class="card-text">€ <?php echo $product->price ?></h5>
                        <p class="card-text">Dimensions: <?php echo $product->dimensions ?>cm</p>
                        <p class="card-text">Weight: <?php echo $product->weight ?>g</p>
                        <?php if (get_class($product) === "Food") { ?>
                            <p class="card-text">Type: <?php echo $product->type ?></p>
                        <?php } ?>
                        <?php if (get_class($product) === "Toy") { ?>
                            <p class="card-text">Material: <?php echo $product->material ?></p>
                        <?php } ?>
                        <?php if (get_class($product) === "Bed") { ?>
                            <p class="card-text">Shape: <?php echo $product->shape ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>