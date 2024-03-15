<?php

class MainController extends Controller
{
    public function index()
    {
        if (isset($_POST["submit"])) {
            try {
                Db::getInstance()->beginTransaction();
                $post = new Post($_POST["title"], $_POST["content"], $_SESSION["currentUser"]);
                $post->insertIntoDb($post);
                Db::getInstance()->commit();
            } catch (PDOException $e) {
                echo $e->getMessage();
                Db::getInstance()->rollBack();
            }
            Db::disconnect();
        }
        require "../views/main.php";
    }
}
