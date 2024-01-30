<?php

include_once './config/functions.php';
include_once './config/Database.php';
include_once './src/controllers/AgentController.php';
include_once './src/models/AgentManager.php';

$db = new Database();
$db = $db->getConnection();

// 6 agents per page
$limit = 6;


$agentManager = new AgentManager($db);
$count = $agentManager->countAgents();


if (isset($_GET['p']) && $_GET['p'] > 0 && $_GET['p'] <= $count) {
    $page = $_GET['p'];
} else {
    $page = 1;
}

ob_start();
$agentController = new AgentController();
$agentController->agentsList($page, $limit);
$content = ob_get_clean();

require 'views/agentsTemplate.php';
