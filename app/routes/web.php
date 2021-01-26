<?php

use app\models\Database;

use app\controllers\ProductController;
use app\controllers\CommentController;
use app\controllers\LoginController;

$db = new Database(SERVER, DATABASE, USERNAME, PASSWORD);

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case 'products':
            $productsController = new ProductController($db);
            $productsController->productPage();
            break;
        case "insertComment":
            $commentsController = new CommentController($db);
            $commentsController->insertComment();
            break;
        case 'login':
            $loginController = new LoginController($db);
            $loginController->loginPage();
    }
}