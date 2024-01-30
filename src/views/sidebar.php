<div class="flex-shrink-0 p-3 sidebar-style">
  <a href="index.php" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
    <img src="../KGB/public/assets/img/Emblema_KGB.svg" alt="KGB" width="50">
    <h3>KGB</h3>
  </a>
  <div id="user_menu">
    <div>
      <a href="index.php?page=missions" class="btn btn-primary">Missions</a>
    </div>
    <div>
      <a href="index.php?page=agents" class="btn btn-primary">Liste Agents</a>
    </div>
    <div class="border-bottom"></div>
    <div class="py-2">
      <a href="index.php?page=login" class="btn btn-success">Admin</a>
    </div>
  </div>

  <?php

  if (isset($_GET['page']) && $_GET['page'] == 'administr') {

  ?>
    <div>
      <a href="index.php?page=login" class="btn btn-danger">Se deconnecter</a>
    </div>

  <?php

  }

  ?>

</div>