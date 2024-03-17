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
        if (isset($_POST["delete"])) {
            try {
                Db::getInstance()->beginTransaction();
                PostRipository::deletePost($_POST["delete"]);
                Db::getInstance()->commit();
            } catch (PDOException $e) {
                echo $e->getMessage();
                Db::getInstance()->rollBack();
            }
            Db::disconnect();
        }
        if (isset($_POST["submitUpdate"])) {
            try {
                Db::getInstance()->beginTransaction();
                PostRipository::updatePost($_POST["submitUpdate"], $_POST["title"], $_POST["content"]);
                Db::getInstance()->commit();
            } catch (PDOException $e) {
                echo $e->getMessage();
                Db::getInstance()->rollBack();
            }
            Db::disconnect();
        }
        if (isset($_POST["disconnect"])) {
            $_SESSION["currentUser"] = null;
            $this->redirect("/login");
        }
        require "../views/main.php";
    }
}
