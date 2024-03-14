<?php

abstract class Controller
{
    public function redirect($path)
    {
        header(Location:$path);
        exit();
    }

    abstract public function index();
}
