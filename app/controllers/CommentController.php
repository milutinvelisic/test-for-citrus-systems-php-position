<?php


namespace app\controllers;


use app\models\Comment;

class CommentController extends Controller
{

    private $database;
    private $commentModel;

    public function __construct($database) {
        $this->database = $database;
        $this->commentModel = new Comment($this->database);
    }

    public function insertComment(){

        $errors = [];

        if(!isset($_POST['email'])){
            array_push($errors, "Email is required.");
        }

        if(!isset($_POST['title'])){
            array_push($errors, "Address is required.");
        }

        if(!isset($_POST['text'])){
            array_push($errors, "Postal Code is required.");
        }

        if(count($errors) == 0){

            $result = $this->commentModel->insertComment($_POST['email'], $_POST['title'], $_POST['text']);
            if($result){
                header('Location: index.php?page=products');
            }else{
                array_push($errors, "There has been an error, pleas try again later!");
                $this->loadView('products', [
                    "errors" => $errors
                ]);
            }
        }else{
            $this->loadView('products', [
                "errors" => $errors
            ]);
        }



    }

}