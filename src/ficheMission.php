<?php

include_once './config/functions.php';
include_once './config/Database.php';
include_once './src/controllers/MissionController.php';
include_once './src/models/MissionManager.php';

if (isset($_GET['mission'])) {
    $id = $_GET['mission'];
}

ob_start();
$missionController = new MissionController();
$missionController->missionDetail($id);
$content = ob_get_clean();

echo $content;
