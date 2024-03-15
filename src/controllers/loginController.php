<?php

class LoginController extends Controller
{
    public function index()
    {
        require "../views/login.php";
        if (isset($_POST["submit"])) {
            try {
                $userInfos = User::getUserByMail($_POST["mail"]);
                if (!$userInfos) {
                    echo "No user with this Email";
                } elseif ($userInfos["password"] !== $_POST["password"]) {
                    echo "wrong password";
                } else {
                    $_SESSION["currentUser"] = $userInfos["id"];
                    $this->redirect("/main");
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            Db::disconnect();
        }
    }
}
