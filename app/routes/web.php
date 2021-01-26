<?php

use app\models\Databaase;
use app\controllers\ProductController as Product;

$db = new Database(SERVER, DATABASE, USERNAME, PASSWORD);

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case 'products':
            $productsController = new Product($db);
            $productsController->productPage();
    }
}