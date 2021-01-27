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

    public function doLogin(){
        $errors = [];

        if(!isset($_POST['email'])){
            array_push($errors, "Email is required.");
        }

        if (!isset($_POST["password"])) {
            array_push($errors, "Password is required.");
        }

        if(count($errors) == 0){

            $user = $this->userModel->findUser($_POST['email'], $_POST['password']);
            if($user){
                $_SESSION['user'] = $user;
                $this->redirect('index.php?page=products');
            }else{
                array_push($errors, "Server is over-clocked, please try again in few minutes.");
            }
        }else{
            array_push($errors, "Invalid username and password combination.");
        }

        if (count($errors)) {
            $this->loadView('login', [
                "errors" => $errors
            ]);
        }

    }

    public function doLogout(){


        session_unset();


        $this->redirect("index.php?page=products");


    }
}