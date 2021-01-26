<?php


namespace app\controllers;


class ProductController extends Controller
{

    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function productPage()
    {
        $this->loadView("product");
    }

}