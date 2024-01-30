<div class="container-sm">
  <div class="login">
    <form action="#" method="POST">
      <div class="m-3">
        <a href="index.php">Revenir au site >></a>
      </div>
      <img src="../KGB/public/assets/img/Emblema_KGB.svg" alt="KGB" width="50" <div class="m-3">
      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
      <br>
      <input class="form-control input" type="email" name="email" placeholder="Login" required>
      <br>
      <input class="form-control input" type="password" name="password" placeholder="Mot de passe" minlength="8" required>
  </div>
  <br>
  <button class="btn btn-dark" type="submit" name="connect">Se connecter</button>
  </form>
</div>
</div>