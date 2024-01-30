<?php

/**
 * Controller for contacts
 *
 * @author Morgane G.
 */

class ContactController
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


  public function contactsList($page, $limit)
  {

    $manager = new ContactManager($this->db);
    $contacts = $manager->getContactsList($page, $limit);
    if (!empty($contacts)) {
      $i = 1;
      foreach ($contacts as $contact) {
        $id = $contact['id_ct'];
        $prenom = $contact['prenom_ct'];
        $nom = $contact['nom_ct'];
        $code = $contact['identification_code_ct'];
        $dt_naissance = $contact['dt_naissance_ct'];
        $nationalite = $contact['nationalite_ct'];
        $sexe = $contact['sexe_ct'];
        $age = $contact['age_ct'];
        $img = $contact['profil_ct'];

        // Display the view
        include './src/views/contactsListTemplate.php';
        $i++;
      }
    } else {
      echo "Aucun résultat";
    }
  }

  public function contactsListName()
  {
    $manager = new ContactManager($this->db);
    $contacts = $manager->listeContacts();
    foreach ($contacts as $contact) {
      $id = $contact['id_ct'];
      $prenom = $contact['prenom_ct'];
      $nom = $contact['nom_ct'];
      $pays = $contact['nationalite_ct'];
      echo '<option value="' . $id . '">' . $prenom . ' ' . $nom . '(' . $pays . ')</option>';
    }
  }
}
