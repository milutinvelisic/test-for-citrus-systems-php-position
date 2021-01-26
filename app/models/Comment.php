<?php


namespace app\models;


class Comment
{

    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getAllActiveComments() {
        return $this->database->executeGet("select * from comments where status = 1");
    }

    public function insertComment($email, $title, $text){

        $params = [
            $email,
            $title,
            $text
        ];

        try {
            $insert = $this->database->conn->prepare("INSERT into comments values(null,?, ?, ?, 0)");
            $result = $insert->execute($params);
            if($result){
                return true;
            }
        }catch (\PDOException $ex){
            echo $ex->getMessage();
        }

    }

}