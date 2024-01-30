<?php

class LoginController
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
   * Connexion to admin space
   *
   * Redirection to page administr
   */
  public function login()
  {

    // CSRF Vérification 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        error('Erreur CSRF !');
      }
    }

    // New token CSRF
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    // Checking  identification informations
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['connect'])) {
      $inputMail = $_POST['email'];
      $inputPassword = $_POST['password'];

      try {
        verifData($inputPassword);
      } catch (Exception $exception) {
        $msg = $exception->getMessage();
        error($msg);
        alert($msg);
        header("Location: index.php?page=login");
      }

      try {
        verifMail($inputMail);
      } catch (Exception $exception) {
        $msg = $exception->getMessage();
        error($msg);
        alert($msg);
        header("Location: index.php?page=login");
      }

      // Get user details from template
      $user = new LoginManager($this->db);

      try {
        $stmt = $user->login($inputPassword, $inputMail);
      } catch (Exception $exception) {
        $msg = $exception->getMessage();
        error($msg);
        alert($msg);
        header("Location: index.php?page=login");
      }

      // Authentication successful
      if (!empty($stmt)) {
        $id_u = $stmt->getId();
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $id_u;
        header("Location:index.php?page=administr&user_id=$id_u&div=1");
      }
    }

    //Show login view
    include './src/views/loginForm.php';
  }
}
