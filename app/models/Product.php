<?php


namespace app\models;


class Product
{

    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getAll() {
        return $this->database->executeGet("select * from products");
    }

}