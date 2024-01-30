<div class="row center">
  <div class="col-sm-2">
    <?php require './src/views/sidebar.php'; ?>
  </div>
  <div class="col-sm-8 m-5">
    <input type="text" class="form-control my-2" value="Rechercher..." id="search">
    <table class="table table-hover" id="missions">
      <tr class="table-primary">
        <th>Titre mission</th>
        <th>Code mission</th>
        <th>Description</th>
        <th>Pays</th>
        <th>Type</th>
        <th>Agent</th>
        <th>Cible</th>
        <th>Date début</th>
        <th>Date fin</th>
        <th>Infos</th>
      </tr>
      <?php echo $content; ?>
    </table>
    <!--Pagination-->
    <?php require './src/views/pagination.php'; ?>

  </div>
</div>