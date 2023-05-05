<?php 

require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Categories.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';

$general = new Category('general');

$dog = new Category('dog');
$cat = new Category('cat');


$glasses = new Product('glasses',15, $general);
// var_dump($glasses);
$meat = new Product('meat',5, $general);
// var_dump($meat);
$catBall = new Game('catBall', 11, $cat, 'ball', '20cm');
// var_dump($catBall);
$dogFood = new Food('dogFood', 3, $dog, 'food','1kg');
// var_dump($dogFood);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>e-shop</title>
        <link rel="stylesheet" href="./style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>


        <?php ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/general.jpg" class="card-img-top" alt="general">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo "Article: $glasses->name";?></h5>
                            <h6 class="card-title"><?php echo "Price: $glasses->price €";?></h6>
                            <h6 class="card-title"><?php echo "Type: $glasses->type";?></h6>
                            <br/>
                            <a href="#" class="btn btn-primary">Buy!</a>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/food.jpg" class="card-img-top" alt="food">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo "Article: $dogFood->name";?></h5>
                            <h6 class="card-title"><?php echo "Price: $dogFood->price €";?></h6>
                            <h6 class="card-title"><?php echo "Type: $dogFood->type";?></h6>
                            <h6 class="card-title"><?php echo "Type: $dogFood->quantity";?></h6>
                            <a href="#" class="btn btn-primary">Buy!</a>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/game.jpg"  class="card-img-top" alt="game">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo "Article: $catBall->name";?></h5>
                            <h6 class="card-title"><?php echo "Price: $catBall->price €";?></h6>
                            <h6 class="card-title"><?php echo "Type: $catBall->dimension";?></h6>
                            <h6 class="card-title"><?php echo "Type: $catBall->type";?></h6>
                            <a href="#" class="btn btn-primary">Buy!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>