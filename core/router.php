<?php

class Router
{
    public function start()
    {
        $url = $_SERVER['REQUEST_URI'];

        if ($url !== "/") {
            $controller = ucfirst(explode("/", $url)[1]) . "Controller";

            if (class_exists($controller)) {
                $controllerObject = new $controller();

                if (method_exists($controllerObject, "index")) {
                    $controllerObject->index();
                }
            } else {
                throw new Exception("No index mothod for" . $controller);
            }
        }


    }
}
