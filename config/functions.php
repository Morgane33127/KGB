<?php
/**
 * Add error message in a text file.
 *
 * @param string $error,
 *
 */
function error(string $error)
{
  $message = date("d-m-Y H:i:s") . " : " . $error . "\n";
  file_put_contents('log.txt', $message, FILE_APPEND);
}

/**
 * Verification of an email adress
 *
 * @param string $email
 *
 */
function verifMail(string $email)
{

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return $email;
  } else {
    throw new Exception("E-mail invalide");
  }
}

/**
 * Verification of inputs
 *
 * @param string $donnees
 * @return string
 *
 */
function verifData(string $donnees): string
{
  if (!empty($donnees)) {
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees, ENT_SUBSTITUTE);
    return $donnees;
  } else {
    throw new Exception("Entrée invalide");
  }
}

/**
 * Session alert with error message
 *
 */
function alert(string $error)
{

?>
<div class="alert alert-danger" role="alert">
  <?php echo $error; ?>
</div>
<?php

}

