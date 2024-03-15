<?php

require_once "../src/models/db.php";
require_once "../src/models/repositories/userRepository.php";
require_once "../src/models/repositories/postRepository.php";
require_once "../src/models/userModel.php";
require_once "../src/models/postModel.php";
require_once "../src/controllers/controller.php";
require_once "../src/controllers/registerController.php";
require_once "../src/controllers/loginController.php";
require_once "../src/controllers/mainController.php";
require_once "../core/router.php";

session_start();
$app = new Router();
$app->start();
