<?php

require_once "src/models/db.php";

$servername = 'db:3306';
$username = 'db';
$password = 'db';

$db = new Db();
$db->setInstance($servername, $username, $password);

echo "hello";
