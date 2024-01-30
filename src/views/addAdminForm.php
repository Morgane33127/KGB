<form method="POST" action="index.php?page=request">
  <div class="row my-1">
    <div class="col">
      <input type="text" id="new_prenom" name="new_prenom" class="form-control" placeholder="prenom">
    </div>
    <div class="col">
      <input type="text" id="new_nom" name="new_nom" class="form-control" placeholder="nom">
    </div>
    <div class="col">
      <input type="email" id="new_mail" name="new_mail" class="form-control" placeholder="E-mail">
    </div>
    <div class="col">
      <input type="password" id="new_mdp" name="new_mdp" class="form-control" placeholder="Mot de passe" minlength="8">
    </div>
    <div class="col">
      <input type="submit" id="new_admin" name="new_admin" class="btn btn-success" value="Ajouter">
    </div>
  </div>
</form>