<?php


namespace app\models;


class User
{
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

}