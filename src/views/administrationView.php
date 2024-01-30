<div class="row center">
  <div class="col-sm-2">
    <?php require './src/views/sidebar.php'; ?>
  </div>
  <div class="col-sm-8 m-5">

    <ul class="nav nav-underline">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php?page=administr&div=1">Agents</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=administr&div=2">Cibles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=administr&div=3">Contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=administr&div=4">Planques</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=administr&div=5">Admins</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=administr&div=6">Missions</a>
      </li>
    </ul>

    <?php

    if ($_GET['page'] == 'administr' && $_GET['div'] == 1) {
    ?>
      <div class="input-group my-2">
        <?php require './src/views/addAgentForm.php'; ?>
      </div>
      <form method="POST" action="index.php?page=request">
        <table class="table table-hover">
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
            <th>Changer le statut</th>
            <th>Action</th>
          </tr>
          <?php echo $content1; ?>
        </table>
      </form>
    <?php
    } else if ($_GET['page'] == 'administr' && $_GET['div'] == 2) {
      require './src/views/addCibleForm.php';
    ?>
      <form method="POST" action="index.php?page=request">
        <table class="table table-hover">
          <tr class="table-primary">
            <th>#</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Date naissance</th>
            <th>Code identification</th>
            <th>Nationalité</th>
            <th>Sexe</th>
            <th>Age</th>
            <th>Photo</th>
            <th>Action</th>
          </tr>
          <?php echo $content2; ?>
        </table>
      </form>
    <?php
    } else if ($_GET['page'] == 'administr' && $_GET['div'] == 3) {
      require './src/views/addContactForm.php';
    ?>
      <form method="POST" action="index.php?page=request">
        <table class="table table-hover">
          <tr class="table-primary">
            <th>#</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Date naissance</th>
            <th>Code identification</th>
            <th>Nationalité</th>
            <th>Sexe</th>
            <th>Age</th>
            <th>Photo</th>
            <th>Action</th>
          </tr>
          <?php echo $content3; ?>
        </table>
      </form>
    <?php
    } else if ($_GET['page'] == 'administr' && $_GET['div'] == 4) {
      require './src/views/addPlanqueForm.php';
    ?>
      <form method="POST" action="index.php?page=request">
        <table class="table table-hover">
          <tr class="table-primary">
            <th>#</th>
            <th>Code planque</th>
            <th>Adresse</th>
            <th>Pays</th>
            <th>Type</th>
            <th>Action</th>
          </tr>
          <?php echo $content4; ?>
        </table>
      </form>
    <?php
    } else if ($_GET['page'] == 'administr' && $_GET['div'] == 5) {
      require './src/views/addAdminForm.php';
    ?>
      <form method="POST" action="index.php?page=request">
        <table class="table table-hover">
          <tr class="table-primary">
            <th>#</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Date de creation</th>
            <th>Action</th>
          </tr>
          <?php echo $content5; ?>
        </table>
      </form>
    <?php
    } else if ($_GET['page'] == 'administr' && $_GET['div'] == 6) {
      require './src/views/addMissionForm.php';
    ?>
      <form method="POST" action="index.php?page=request">
        <table class="table table-hover">
          <tr class="table-primary">
            <th>#</th>
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
            <th>Action</th>
          </tr>
          <?php echo $content6; ?>
        </table>
      </form>
    <?php
    }
    ?>
  </div>
</div>