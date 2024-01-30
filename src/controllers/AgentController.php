<?php

/**
 * Controller for agents
 *
 * @author Morgane G.
 */

class AgentController
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


  public function agentsList($page, $limit)
  {

    $manager = new AgentManager($this->db);
    $agents = $manager->getAgentsList($page, $limit);
    if (!empty($agents)) {
      $i = 1;
      foreach ($agents as $agent) {
        $id = $agent['id_a'];
        $prenom = $agent['prenom_a'];
        $nom = $agent['nom_a'];
        $code = $agent['identification_code_a'];
        $dt_naissance = $agent['dt_naissance_a'];
        $nationalite = $agent['nationalite_a'];
        $spe = $agent['spe_a'];
        $sexe = $agent['sexe_a'];
        $age = $agent['age_a'];
        $img = $agent['profil_a'];
        $statut = $agent['lbl'];

        // Display the view
        include './src/views/agentsListTemplate.php';
        $i++;
      }
    } else {
      echo "Aucun résultat";
    }
  }

  public function filtre($spe, $natio, $stat)
  {

    $manager = new AgentManager($this->db);
    $agents = $manager->filtre($spe, $natio, $stat);
    if (!empty($agents)) {
      $i = 1;
      foreach ($agents as $agent) {
        $id = $agent['id_a'];
        $prenom = $agent['prenom_a'];
        $nom = $agent['nom_a'];
        $code = $agent['identification_code_a'];
        $dt_naissance = $agent['dt_naissance_a'];
        $nationalite = $agent['nationalite_a'];
        $spe = $agent['spe_a'];
        $sexe = $agent['sexe_a'];
        $age = $agent['age_a'];
        $img = $agent['profil_a'];
        $statut = $agent['lbl'];

        // Display the view
        include '../src/views/agentsListTemplate.php';
        $i++;
      }
    } else {
      echo "Aucun résultat";
    }
  }

  public function agentsListName()
  {
    $manager = new AgentManager($this->db);
    $agents = $manager->listeAgents();
    foreach ($agents as $agent) {
      $id = $agent['id_a'];
      $prenom = $agent['prenom_a'];
      $nom = $agent['nom_a'];
      $pays = $agent['nationalite_a'];
      $spe = $agent['spe_a'];
      echo "<option value=\"$id\">$prenom $nom($pays)->$spe</option>";
    }
  }
}
