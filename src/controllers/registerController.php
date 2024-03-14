<?php

class RegisterController extends Controller
{
    public function index()
    {
        require "../views/register.php";
        if (isset($_POST["submit"])) {
            try {
                Db::getInstance()->beginTransaction();
                $user = new User($_POST["firstName"], $_POST["name"], $_POST["mail"], $_POST["password"]);
                $user->insertIntoDb($user);
                Db::getInstance()->commit();
                Db::disconnect();
            } catch (PDOException $e) {
                echo $e->getMessage();
                Db::getInstance()->rollBack();
                Db::disconnect();
            }
        }
    }
}
