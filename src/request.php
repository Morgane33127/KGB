<?php

include_once './vendor/autoload.php';

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4()->toString();

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

$connexion = new Database();
$pdo = $connexion->getConnection();

if (isset($_POST['new_agent'])) {

  $prenom = $_POST['new_prenom'];
  $nom = $_POST['new_nom'];
  $code = $_POST['new_code'];
  $dt_naissance = $_POST['new_date'];
  $nat = $_POST['new_nat'];
  $spe = $_POST['new_spe'];
  $sex = $_POST['new_sex'];
  $age = intval($_POST['new_age']);
  $mdp = $_POST['new_mdp'];
  $mdp = password_hash($mdp, PASSWORD_BCRYPT);
  $statut = "03";

  $agentmanager = new AgentManager($pdo);
  $agentmanager->addAgent($uuid, $prenom, $nom, $dt_naissance, $code, $nat, $spe, $mdp, $sex, $age, $statut);

  header('Location: index.php?page=administr&div=1');
}

if (isset($_POST['new_cible'])) {

  $prenom = $_POST['new_prenom'];
  $nom = $_POST['new_nom'];
  $code = $_POST['new_code'];
  $dt_naissance = $_POST['new_date'];
  $nat = $_POST['new_nat'];
  $sex = $_POST['new_sex'];
  $age = intval($_POST['new_age']);

  $ciblemanager = new CibleManager($pdo);
  $ciblemanager->addCible($prenom, $nom, $dt_naissance, $code, $nat, $sex, $age);

  header('Location: index.php?page=administr&div=2');
}

if (isset($_POST['new_contact'])) {

  $prenom = $_POST['new_prenom'];
  $nom = $_POST['new_nom'];
  $code = $_POST['new_code'];
  $dt_naissance = $_POST['new_date'];
  $nat = $_POST['new_nat'];
  $sex = $_POST['new_sex'];
  $age = intval($_POST['new_age']);

  $contactmanager = new ContactManager($pdo);
  $contactmanager->addContact($prenom, $nom, $dt_naissance, $code, $nat, $sex, $age);

  header('Location: index.php?page=administr&div=3');
}

if (isset($_POST['new_planque'])) {

  $code = $_POST['new_code_p'];
  $adresse = $_POST['new_adresse'];
  $pays = $_POST['new_pays'];
  $type = $_POST['new_type'];
  $planquemanager = new PlanqueManager($pdo);
  $planquemanager->addPlanque($code, $adresse, $pays, $type);

  header('Location: index.php?page=administr&div=4');
}

if (isset($_POST['new_admin'])) {

  $prenom = $_POST['new_prenom'];
  $nom = $_POST['new_nom'];
  $mail = $_POST['new_mail'];
  $dt = date("Y-m-d");
  $mdp = $_POST['new_mdp'];
  $mdp = password_hash($mdp, PASSWORD_BCRYPT);

  $adminmanager = new AdminManager($pdo);
  $adminmanager->addAdmin($prenom, $nom, $mail, $mdp, $dt);

  header('Location: index.php?page=administr&div=5');
}

if (isset($_POST['new_m'])) {

  $titre = $_POST['titre_m'];
  $code = $_POST['code_m'];
  $description = $_POST['description_m'];
  $pays = strtoupper($_POST['pays_m']);
  $idAgent = $_POST['agent_m'];
  $cible = $_POST['cible_m'];
  $contact = $_POST['contact_m'];
  $planque = $_POST['planque_m'];
  $type = strtoupper($_POST['type_m']);
  $spe = strtoupper($_POST['spe_m']);
  $statut = strtoupper($_POST['statut_m']);
  $dtDebut = $_POST['dt_debut'];
  $dtFin = $_POST['dt_fin'];

  $missionManager = new MissionManager($pdo);
  $missionManager->addMission($uuid, $titre, $description, $code, $pays, $idAgent, $cible, $contact, $type, $statut, $planque, $spe, $dtDebut, $dtFin);

  header('Location: index.php?page=administr&div=6');
}

foreach ($_POST as $cle => $value) {

  if (str_contains($cle, 'supp_agent_')) {
    $k = substr($cle, 11);
    $id = $_POST['id' . $k];
    $connection = new AgentManager($pdo);
    $supp = $connection->suppAgent($id);
    header('Location: index.php?page=administr&div=1');
  } else if (str_contains($cle, 'supp_cible_')) {
    $k = substr($cle, 11);
    $id = $_POST['id' . $k];
    $connection = new CibleManager($pdo);
    $supp = $connection->suppCible($id);
    header('Location: index.php?page=administr&div=2');
  } else if (str_contains($cle, 'supp_ct_')) {
    $k = substr($cle, 8);
    $id = $_POST['id' . $k];
    $connection = new ContactManager($pdo);
    $supp = $connection->suppContact($id);
    header('Location: index.php?page=administr&div=3');
  } else if (str_contains($cle, 'supp_p_')) {
    $k = substr($cle, 7);
    $id = $_POST['id' . $k];
    $connection = new PlanqueManager($pdo);
    $supp = $connection->suppPlanque($id);
    header('Location: index.php?page=administr&div=4');
  } else if (str_contains($cle, 'supp_admin_')) {
    $k = substr($cle, 11);
    $id = $_POST['id' . $k];
    $connection = new AdminManager($pdo);
    $supp = $connection->suppAdmin($id);
    header('Location: index.php?page=administr&div=5');
  } else if (str_contains($cle, 'supp_m_')) {
    $k = substr($cle, 7);
    $id = $_POST['id' . $k];
    $connection = new MissionManager($pdo);
    $supp = $connection->suppMission($id);
    header('Location: index.php?page=administr&div=6');
  }
}
