<?php

include_once '../config/functions.php';
include_once '../config/Database.php';
include_once '../src/controllers/AgentController.php';
include_once '../src/models/AgentManager.php';
include_once '../src/controllers/CibleController.php';
include_once '../src/models/CibleManager.php';
include_once '../src/controllers/ContactController.php';
include_once '../src/models/ContactManager.php';
include_once '../src/controllers/PlanqueController.php';
include_once '../src/models/PlanqueManager.php';
include_once '../src/controllers/AdminController.php';
include_once '../src/models/AdminManager.php';

$connexion = new Database();
$pdo = $connexion->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'), true);

  if ($data['type'] === 'agents') {
    $prenom = $data['prenom'];
    $nom = $data['nom'];
    $dt_naissance = $data['dt_naissance'];
    $code = $data['code'];
    $nat = $data['nat'];
    $spe = $data['spe'];
    $sex = $data['sex'];
    $age = $data['age'];
    $id = $data['id'];
    $agentmanager = new AgentManager($pdo);
    $agentmanager->majAgent($prenom, $nom, $dt_naissance, $code, $nat, $spe, $sex, $age, $id);
  } else if (!empty($data['statut'])) {
    $statut = $data['statut'];
    $id = $data['id'];
    $agentmanager = new AgentManager($pdo);
    $agentmanager->changeStatut($id, $statut);
  } else if ($data['type'] === 'cibles') {
    $prenom = $data['prenom'];
    $nom = $data['nom'];
    $dt_naissance = $data['dt_naissance'];
    $code = $data['code'];
    $nat = $data['nat'];
    $sex = $data['sex'];
    $age = $data['age'];
    $id = $data['id'];
    $ciblemanager = new CibleManager($pdo);
    $ciblemanager->majCible($prenom, $nom, $dt_naissance, $code, $nat, $sex, $age, $id);
  } else if ($data['type'] === 'contacts') {
    $prenom = $data['prenom'];
    $nom = $data['nom'];
    $dt_naissance = $data['dt_naissance'];
    $code = $data['code'];
    $nat = $data['nat'];
    $sex = $data['sex'];
    $age = $data['age'];
    $id = $data['id'];
    $contactmanager = new ContactManager($pdo);
    $contactmanager->majContact($prenom, $nom, $dt_naissance, $code, $nat, $sex, $age, $id);
  } else if ($data['type'] === 'planques') {
    $code = $data['code'];
    $adresse = $data['adresse'];
    $pays = $data['pays'];
    $type = $data['type_p'];
    $id = $data['id'];
    $planquemanager = new PlanqueManager($pdo);
    $planquemanager->majPlanque($code, $adresse, $pays, $type, $id);
  } else if ($data['type'] === 'admin') {
    $prenom = $data['prenom'];
    $nom = $data['nom'];
    $id = $data['id'];
    $adminmanager = new AdminManager($pdo);
    $adminmanager->majAdmin($prenom, $nom, $id);
  } else {
    echo "Méthode non autorisée.";
  }
}
