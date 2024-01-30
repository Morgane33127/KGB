<div class="row center">
  <div class="col-sm-2">
    <?php require './src/views/sidebar.php'; ?>
  </div>
  <div class="col-sm-8 m-5">
    <div class="row">
      <div class="col">
        <select class="form-control my-2" id="natio">
          <option value="">Nationalité</option>
          <option value="EU">EU</option>
          <option value="FR">FR</option>
        </select>
      </div>
      <div class="col">
        <select class="form-control my-2" id="spe">
          <option value="">Spe</option>
          <option value="AS">Assassinat</option>
          <option value="IN">Infiltration</option>
          <option value="AD">Agent double</option>
        </select>
      </div>
      <div class="col">
        <select class="form-control my-2" id="stat">
          <option value="">Statut</option>
          <option value="01">En mission</option>
          <option value="02">En congés</option>
          <option value="03">Disponible</option>
        </select>
      </div>
    </div>

    <table class="table table-hover" id="agents">
      <tr class="table-primary">
        <th>#</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Date naissance</th>
        <th>Code identification</th>
        <th>Nationalité</th>
        <th>Spe</th>
        <th>Sexe</th>
        <th>Age</th>
        <th>Photo</th>
        <th>Statut</th>
      </tr>
      <?php echo $content; ?>
    </table>
    <!--Pagination-->
    <?php require './src/views/pagination.php'; ?>

  </div>
</div>