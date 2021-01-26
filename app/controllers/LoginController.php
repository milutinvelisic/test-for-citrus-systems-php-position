<?php


namespace app\controllers;


use app\models\User;

class LoginController extends Controller
{
    private $database;
    private $userModel;

    public function __construct($database) {
        $this->database = $database;
        $this->userModel = new User($this->database);
    }

    public function loginPage()
    {
        $this->loadView("login");
    }
}