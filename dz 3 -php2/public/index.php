<?php

use app\engine\Autoload;
use app\models\{Product, User};

//TODO добавьте абсолютные пути
include "../engine/Autoload.php";
include "../config/config.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Product("Пицца", "Описание", 125);
$product->insert();

var_dump($product);

$user = new User("User", 125);
$user->insert();

var_dump($user);

die();
$product = new Product();
var_dump($product);


$product = $product->getOne(10);



