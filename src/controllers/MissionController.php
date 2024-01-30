<?php

/**
 * Controller for missions
 *
 * @author Morgane G.
 */

class MissionController
{

  private $db;

  /**
   * Constructor
   *
   */
  public function __construct()
  {
    $this->db = new Database();
    $this->db = $this->db->getConnection();
  }

  /**
   * Function to display missions'list
   *
   */
  public function missionsList($page, $limit)
  {

    $manager = new MissionManager($this->db);
    $missions = $manager->getMissionsList($page, $limit);
    if (!empty($missions)) {
      $i = 1;
      foreach ($missions as $mission) {
        $id = $mission['id_m'];
        $titre = $mission['titre_m'];
        $code = $mission['code_m'];
        $description = $mission['description_m'];
        $pays = $mission['pays_m'];
        $agent = $mission['prenom_a'] . " " . $mission['nom_a'];
        $cible = $mission['prenom_c'] . " " . $mission['nom_c'];
        $type = $mission['spe_m'];
        $dtDebut = $mission['dt_debut_m'];
        $dtFin = $mission['dt_fin_m'];

        // Display the view
        include './src/views/missionsListTemplate.php';
        $i++;
      }
    } else {
      echo "Aucun résultat";
    }
  }

  /**
   * Informations about aspecial mission
   *
   */
  public function missionDetail($id)
  {

    $manager = new MissionManager($this->db);
    $mission = $manager->getMissionInfos($id);
    $titre = $mission['titre_m'];
    $code = $mission['code_m'];
    $description = $mission['description_m'];
    $pays = $mission['pays_m'];
    $agent = $mission['prenom_a'] . " " . $mission['nom_a'];
    $cible = $mission['prenom_c'] . " " . $mission['nom_c'];
    $type = $mission['spe_m'];
    $dtDebut = $mission['dt_debut_m'];
    $dtFin = $mission['dt_fin_m'];
    $statut = $mission['lbl'];
    $contacts[] = $mission['prenom_ct'] . " " . $mission['nom_ct'];
    $planque = $mission['code_p'];
    $pAdresse = $mission['adresse_p'];

    // Display the view
    include './src/views/missionDetailView.php';
  }

  /**
   * Search a mission
   *
   */
  public function search($data)
  {
    $manager = new MissionManager($this->db);
    $missions = $manager->search($data);

    if (!empty($missions)) {
      foreach ($missions as $mission) {
        $id = $mission['id_m'];
        $titre = $mission['titre_m'];
        $code = $mission['code_m'];
        $description = $mission['description_m'];
        $pays = $mission['pays_m'];
        $agent = $mission['prenom_a'] . " " . $mission['nom_a'];
        $cible = $mission['prenom_c'] . " " . $mission['nom_c'];
        $type = $mission['spe_m'];
        $dtDebut = $mission['dt_debut_m'];
        $dtFin = $mission['dt_fin_m'];

        // Display the view
        include '../src/views/missionsListTemplate.php';
      }
    } else {
      echo "Aucun résultat";
    }
  }
}
