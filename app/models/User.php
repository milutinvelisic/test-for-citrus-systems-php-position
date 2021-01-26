<?php


namespace app\models;


class User
{
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function findUser($email, $password){
        return $this->database->executeNonGet( "SELECT * from users where email = ? and password = ?", [$email, $password]);
    }

}