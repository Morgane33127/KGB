<?php

class LoginManager
{
  private $conn;

  /**
   * Constructor
   *
   */
  public function __construct($db)
  {
    $this->conn = $db;
  }

  /**
   * Verifications of email and password to enter to the administration area.
   * 
   * @param string $mdp password
   * @param string $login email
   * @return object User
   * @access public
   */
  public function login(string $mdp, string $login): Admin
  {
    $stmt = $this->conn->prepare('SELECT * FROM admin WHERE mail_g = :email');
    $stmt->bindValue(':email', $login);
    $stmt->execute();
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($user) > 0) {
      $newUser = new Admin($user[0]['id_i'], $user[0]['prenom_g'], $user[0]['nom_g'], $user[0]['mail_g'], $user[0]['mdp_g'], $user[0]['dt_crea']);
      if (!empty($newUser) && password_verify($mdp, $newUser->getPssd()) == true) {
        return ($newUser);
      } else {
        throw new Exception('Mot de passe incorrect.');
      }
    } else {
      throw new Exception('E-mail non reconnu.');
    }
  }
}
