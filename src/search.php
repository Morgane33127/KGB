<?php

include_once '../config/functions.php';
include_once '../config/Database.php';
include_once '../src/controllers/MissionController.php';
include_once '../src/models/MissionManager.php';
include_once '../src/controllers/AgentController.php';
include_once '../src/models/AgentManager.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'), true);

  if ($data['type'] === 'search') {
    $input = $data['data'];
    $missionController = new MissionController();
    $missionController->search($input);
  } else if ($data['type'] === 'filtre') {
    $spe = $data['spe'];
    $natio = $data['natio'];
    $stat = $data['stat'];

    if (empty($spe)) {
      $spe = '%';
    }

    if (empty($natio)) {
      $natio = '%';
    }

    if (empty($stat)) {
      $stat = '%';
    }

    $agentController = new AgentController();
    $agentController->filtre($spe, $natio, $stat);
  } else {
    echo "Méthode non autorisée.";
  }
}
