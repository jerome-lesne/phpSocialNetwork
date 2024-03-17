<?php

class LoginController extends Controller
{
    public function index()
    {
        if (isset($_POST["submit"])) {
            try {
                $userInfos = User::getUserByMail($_POST["mail"]);
                if (!$userInfos) {
                    throw new Exception("Error this Email does not exist", 10);
                } elseif ($userInfos["password"] !== $_POST["password"]) {
                    throw new Exception("Wrong Password", 20);
                } else {
                    $_SESSION["currentUser"] = $userInfos["id"];
                    $this->redirect("/");
                }
            } catch (PDOException | \Exception $e) {
                switch ($e->getCode()) {
                    case 10:
                        $loginMailError = $e->getMessage();
                        break;
                    case 20:
                        $loginPasswordError = $e->getMessage();
                        break;
                    default:
                        echo $e->getMessage();
                        break;
                }
            }
            Db::disconnect();
        }
        require "../views/login.php";
    }
}
