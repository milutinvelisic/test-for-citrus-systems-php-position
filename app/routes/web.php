<?php

use app\models\Database;

use app\controllers\ProductController;

$db = new Database(SERVER, DATABASE, USERNAME, PASSWORD);

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case 'products':
            $productsController = new ProductController($db);
            $productsController->productPage();
    }
}