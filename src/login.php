<?php

include_once './config/functions.php';
include_once './config/Database.php';
include_once './src/controllers/LoginController.php';
include_once './src/models/LoginManager.php';
include_once './src/models/Admin.php';

$loginController = new LoginController();
$loginController->login();