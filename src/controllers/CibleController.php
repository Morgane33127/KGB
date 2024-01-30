<?php

/**
 * Controller for targets
 *
 * @author Morgane G.
 */

class CibleController
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


  public function ciblesList($page, $limit)
  {

    $manager = new CibleManager($this->db);
    $cibles = $manager->getCiblesList($page, $limit);
    if (!empty($cibles)) {
      $i = 1;
      foreach ($cibles as $cible) {
        $id = $cible['id_c'];
        $prenom = $cible['prenom_c'];
        $nom = $cible['nom_c'];
        $code = $cible['identification_code_c'];
        $dt_naissance = $cible['dt_naissance_c'];
        $nationalite = $cible['nationalite_c'];
        $sexe = $cible['sexe_c'];
        $age = $cible['age_c'];
        $img = $cible['profil_c'];

        // Display the view
        include './src/views/ciblesListTemplate.php';
        $i++;
      }
    } else {
      echo "Aucun résultat";
    }
  }

  public function ciblesListName()
  {
    $manager = new CibleManager($this->db);
    $cibles = $manager->listeCibles();
    foreach ($cibles as $cible) {
      $id = $cible['id_c'];
      $prenom = $cible['prenom_c'];
      $nom = $cible['nom_c'];
      $pays = $cible['nationalite_c'];
      echo '<option value="' . $id . '">' . $prenom . ' ' . $nom . '(' . $pays . ')</option>';
    }
  }
}
