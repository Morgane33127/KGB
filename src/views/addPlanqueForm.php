<form method="POST" action="index.php?page=request">
  <div class="row my-1">
    <div class="col">
      <input type="text" id="new_code_p" name="new_code_p" class="form-control" placeholder="Code planque">
    </div>
    <div class="col">
      <input type="text" id="new_adresse" name="new_adresse" class="form-control" placeholder="Adresse">
    </div>
    <div class="col">
      <input type="text" id="new_pays" name="new_pays" class="form-control" placeholder="Pays" maxlength="2">
    </div>
    <div class="col">
      <input type="text" id="new_type" name="new_type" class="form-control" placeholder="Type" maxlength="2">
    </div>
    <div class="col">
      <input type="submit" id="new_planque" name="new_planque" class="btn btn-success" value="Ajouter">
    </div>
  </div>
</form>