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
                $this->redirect('index.php?page=products');
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

    public function activateComment(){
        if(isset($_POST['idComment'])){
            $comment = $this->commentModel->activateComment($_POST['idComment']);

            if($comment){
                $this->redirect('index.php?page=products');
            }else{
                $errors = [];
                array_push($errors, "Server error, please try again!");
                $this->loadView('products', [
                    "errors" => $errors
                ]);
            }
        }
    }

    public function deactivateComment(){
        if(isset($_POST['idComment'])){
            $comment = $this->commentModel->deactivateComment($_POST['idComment']);

            if($comment){
                $this->redirect('index.php?page=products');
            }else{
                $errors = [];
                array_push($errors, "Server error, please try again!");
                $this->loadView('products', [
                    "errors" => $errors
                ]);
            }
        }
    }


    public function deleteComment(){
        if(isset($_POST['idComment'])){
            $comment = $this->commentModel->deleteComment($_POST['idComment']);

            if($comment){
                $this->redirect('index.php?page=products');
            }else{
                $errors = [];
                array_push($errors, "Server error, please try again!");
                $this->loadView('products', [
                    "errors" => $errors
                ]);
            }
        }
    }

}