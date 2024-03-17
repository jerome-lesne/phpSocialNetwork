<?php

class RegisterController extends Controller
{
    public function index()
    {
        if (isset($_POST["submit"])) {
            try {
                Db::getInstance()->beginTransaction();
                $user = new User($_POST["firstName"], $_POST["name"], $_POST["mail"], $_POST["password"]);
                $user->insertIntoDb($user);
                Db::getInstance()->commit();
                $this->redirect("/login");
            } catch (PDOException | \Exception $e) {
                $errorCode = $e->getCode();
                if ($errorCode = 10) {
                    $mailError = $e->getMessage();
                } else {
                    echo $e->getMessage();
                }
                Db::getInstance()->rollBack();
            }
            Db::disconnect();
        }
        require "../views/register.php";
    }
}
