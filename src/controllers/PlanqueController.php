<?php

/**
 * Controller for boards
 *
 * @author Morgane G.
 */

class PlanqueController
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


  public function planquesList($page, $limit)
  {

    $manager = new PlanqueManager($this->db);
    $planques = $manager->getPlanquesList($page, $limit);
    if (!empty($planques)) {
      $i = 1;
      foreach ($planques as $planque) {
        $id = $planque['id_p'];
        $code = $planque['code_p'];
        $adresse = $planque['adresse_p'];
        $pays = $planque['pays_p'];
        $type = $planque['type_p'];

        // Display the view
        include './src/views/planquesListTemplate.php';
        $i++;
      }
    } else {
      echo "Aucun résultat";
    }
  }

  public function planquesListName()
  {
    $manager = new PlanqueManager($this->db);
    $planques = $manager->listePlanques();
    foreach ($planques as $planque) {
      $id = $planque['id_p'];
      $adresse = $planque['adresse_p'];
      echo '<option value="' . $id . '">' . $adresse . "</option>";
    }
  }
}
