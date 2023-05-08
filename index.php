<?php 

require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Categories.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';

$general = new Category('general');
$dog = new Category('dog');
$cat = new Category('cat');


$glasses = new Product('glasses',15, $general);
$glasses->img_url = './images/general.jpg';

$meat = new Product('meat',5, $general);
$meat->img_url = './images/general.jpg';

$catBall = new Game('catBall', 11, $cat, 'ball', '20cm');
$catBall->img_url = './images/game.jpg';

$dogFood = new Food('dogFood', 3, $dog, 'food','1kg');
$dogFood->img_url = './images/food.jpg';


$products = [
    $glasses,
    $meat,
    $catBall,
    $dogFood
]

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
                <?php foreach($products as $product){?>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $product->img_url; ?> class="card-img-top" alt="general">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo "Article: $product->name";?></h5>
                            <h6 class="card-title"><?php echo "Price: $product->price €";?></h6>
                            <h6 class="card-title"><?php echo "Type: $product->type";?></h6>
                            <br/>
                            <a href="#" class="btn btn-primary">Buy!</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </body>
</html>