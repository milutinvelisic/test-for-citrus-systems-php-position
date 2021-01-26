<?php


namespace app\controllers;

use app\models\Comment;
use app\models\Product;

class ProductController extends Controller
{

    private $database;
    private $productModel;
    private $commentModel;

    public function __construct($database) {
        $this->database = $database;
        $this->productModel = new Product($this->database);
        $this->commentModel = new Comment($this->database);
    }

    public function productPage()
    {
        $this->loadView("product", [
            'products' =>  $this->productModel->getAll(),
            'comments' => $this->commentModel->getAllActiveComments(),
            'allComments' => $this->commentModel->getAllComments()
        ]);
    }

}