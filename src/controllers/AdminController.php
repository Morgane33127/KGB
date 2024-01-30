<?php

/**
 * Controller for admin
 *
 * @author Morgane G.
 */

class AdminController
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


  public function adminList($page, $limit)
  {

    $manager = new AdminManager($this->db);
    $admins = $manager->getAdminList($page, $limit);
    if (!empty($admins)) {
      $i = 1;
      foreach ($admins as $admin) {
        $id = $admin['id_i'];
        $prenom = $admin['prenom_g'];
        $nom = $admin['nom_g'];
        $dt_crea = $admin['dt_crea'];

        // Display the view
        include './src/views/adminListTemplate.php';
        $i++;
      }
    } else {
      echo "Aucun résultat";
    }
  }
}
