<form method="POST" action="index.php?page=request">
  <div class="row my-1">
    <div class="col">
      <input type="text" id="new_prenom" name="new_prenom" class="form-control" placeholder="prenom">
    </div>
    <div class="col">
      <input type="text" id="new_nom" name="new_nom" class="form-control" placeholder="nom">
    </div>
    <div class="col">
      <input type="date" id="new_date" name="new_date" class="form-control">
    </div>
    <div class="col">
      <input type="text" id="new_code" name="new_code" class="form-control" placeholder="Code d'identification">
    </div>
    <div class="col">
      <input type="text" id="new_nat" name="new_nat" class="form-control" placeholder="Nationalité" maxlength="2">
    </div>
  </div>
  <div class="row my-1">
    <div class="col">
      <input type="text" id="new_mdp" name="new_mdp" class="form-control" placeholder="Mot de passe" minlength="8">
    </div>
    <div class="col">
      <input type="text" id="new_spe" name="new_spe" class="form-control" placeholder="Specialité" maxlength="2">
    </div>
    <div class="col">
      <input type="text" id="new_sex" name="new_sex" class="form-control" placeholder="Sexe" maxlength="1">
    </div>
    <div class="col">
      <input type="number" id="new_age" name="new_age" class="form-control" placeholder="Age" maxlength="3" min="18">
    </div>
    <div class="col">
      <input type="submit" id="new_agent" name="new_agent" class="btn btn-success" value="Ajouter">
    </div>
  </div>
</form>