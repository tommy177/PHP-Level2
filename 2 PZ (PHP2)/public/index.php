<?php

use app\models\Product;
use app\engine\Db;
use app\models\User;

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$db = new Db();

$product = new Product($db);


echo $product->getOne(4);
echo $product->getAll();

$user = new User($db);

echo $user->getOne(1);
echo $user->getAll();
