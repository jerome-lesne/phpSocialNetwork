<?php

class Router
{
    public function start()
    {
        $url = $_SERVER['REQUEST_URI'];

        switch ($url) {
            case '/':
                if (isset($_SESSION["currentUser"])) {
                    if (User::getUserById($_SESSION["currentUser"])["id"]) {
                        if (class_exists("MainController")) {
                            $controllerObject = new MainController();
                            if (method_exists($controllerObject, "index")) {
                                $controllerObject->index();
                            }
                        }
                    }
                } else {
                    header("Location:/login");
                }
                break;
            case '/login':
                if (class_exists("LoginController")) {
                    $controllerObject = new LoginController();
                    if (method_exists($controllerObject, "index")) {
                        $controllerObject->index();
                    }
                } else {
                    throw new Exception("No index mothod for LoginController");
                }
                break;
            case '/register':
                if (class_exists("RegisterController")) {
                    $controllerObject = new RegisterController();
                    if (method_exists($controllerObject, "index")) {
                        $controllerObject->index();
                    }
                } else {
                    throw new Exception("No index mothod for LoginController");
                }
                break;
            default:
                echo "error 404, this page does not exist";
                break;
        }


    }
}
