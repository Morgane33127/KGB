<form method="POST" action="index.php?page=request">
  <div class="row my-1">
    <div class="col">
      <input type="text" id="titre_m" name="titre_m" class="form-control" placeholder="Titre mission">
    </div>
    <div class="col">
      <input type="text" id="description_m" name="description_m" class="form-control" placeholder="Description">
    </div>
    <div class="col">
      <input type="text" id="code_m" name="code_m" class="form-control" placeholder="Code">
    </div>
    <div class="col">
      <input type="text" id="pays_m" name="pays_m" class="form-control" placeholder="Pays" maxlength="2" minlength="2">
    </div>
    <div class="col">
      <select class="form-control" id="agent_m" name="agent_m">
        <option value="">Agent</option>
        <?php echo $agentList; ?>
      </select>
    </div>
  </div>
  <div class="row my-1">
    <div class="col">
      <select class="form-control" id="cible_m" name="cible_m">
        <option value="">Cible</option>
        <?php echo $cibleList; ?>
      </select>
    </div>
    <div class="col">
      <select class="form-control" id="contact_m" name="contact_m">
        <option value="">Contact</option>
        <?php echo $contactList; ?>
      </select>
    </div>
    <div class="col">
      <input type="text" id="type_m" name="type_m" class="form-control" placeholder="Type" maxlength="2" minlength="2">
    </div>
    <div class="col">
      <input type="text" id="statut_m" name="statut_m" class="form-control" placeholder="Statut" maxlength="2" minlength="2">
    </div>
    <div class="col">
      <select class="form-control" id="planque_m" name="planque_m">
        <option value="">Planque</option>
        <?php echo $planqueList; ?>
      </select>
    </div>
  </div>
  <div class="row my-1">
    <div class="col">
      <input type="text" id="spe_m" name="spe_m" class="form-control" placeholder="Spe" maxlength="2" minlength="2">
    </div>
    <div class="col">
      <input type="date" id="dt_debut" name="dt_debut" class="form-control">
    </div>
    <div class="col">
      <input type="date" id="dt_fin" name="dt_fin" class="form-control">
    </div>
    <div class="col">
      <input type="submit" id="new_m" name="new_m" class="btn btn-success" value="Ajouter">
    </div>
    <div class="col">
    </div>
  </div>
</form>