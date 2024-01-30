<?php

include_once './config/functions.php';
include_once './config/Database.php';
include_once './src/controllers/AgentController.php';
include_once './src/models/AgentManager.php';
include_once './src/controllers/CibleController.php';
include_once './src/models/CibleManager.php';
include_once './src/controllers/ContactController.php';
include_once './src/models/ContactManager.php';
include_once './src/controllers/PlanqueController.php';
include_once './src/models/PlanqueManager.php';
include_once './src/controllers/AdminController.php';
include_once './src/models/AdminManager.php';
include_once './src/controllers/MissionController.php';
include_once './src/models/MissionManager.php';

$db = new Database();
$db = $db->getConnection();

// 1 agents per page
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
$content1 = ob_get_clean();

ob_start();
$cibleController = new CibleController();
$cibleController->ciblesList($page, $limit);
$content2 = ob_get_clean();

ob_start();
$contactController = new ContactController();
$contactController->contactsList($page, $limit);
$content3 = ob_get_clean();

ob_start();
$planqueController = new PlanqueController();
$planqueController->planquesList($page, $limit);
$content4 = ob_get_clean();

ob_start();
$adminController = new AdminController();
$adminController->adminList($page, $limit);
$content5 = ob_get_clean();


ob_start();
$agentController = new AgentController();
$agentController->agentsListName();
$agentList = ob_get_clean();

ob_start();
$cibleController = new CibleController();
$cibleController->ciblesListName();
$cibleList = ob_get_clean();

ob_start();
$contactController = new ContactController();
$contactController->contactsListName();
$contactList = ob_get_clean();

ob_start();
$planqueController = new PlanqueController();
$planqueController->planquesListName();
$planqueList = ob_get_clean();

ob_start();
$missionController = new MissionController();
$missionController->missionsList($page, $limit);
$content6 = ob_get_clean();


require 'views/administrationView.php';
