<?php

include_once './config/functions.php';
include_once './config/Database.php';
include_once './src/controllers/MissionController.php';
include_once './src/models/MissionManager.php';

$db = new Database();
$db = $db->getConnection();

// 1 mission per page
$limit = 1;


$missionManager = new MissionManager($db);
$count = $missionManager->countMissions();


if (isset($_GET['p']) && $_GET['p'] > 0 && $_GET['p'] <= $count) {
    $page = $_GET['p'];
} else {
    $page = 1;
}

ob_start();
$missionController = new MissionController();
$missionController->missionsList($page, $limit);
$content = ob_get_clean();

require 'views/homeTemplate.php';
