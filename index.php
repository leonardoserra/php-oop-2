<?php 

require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Categories.php';

$categories = [
    $dog = new Category('dog'),
    $cat = new Category('cat')
];



$ball = new Product('ball',15, $categories);
$meat = new Product('meat',5, $categories);
var_dump($ball);

echo "name: $ball->name";
echo '<br>';
echo "prezzo: $ball->price";
echo '<br>';
echo "sconto: $ball->discount";
echo '<br>';
var_dump($ball->category[0]);




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
        
    </body>
</html>