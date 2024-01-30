<div class="container m-5">
    <div class="m-5">
        <a class="btn btn-primary" href="index.php">Revenir en arrière</a>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h3>Infos missions</h3>
            <div class="m-3">
                Titre : <?php echo $titre; ?>
            </div>
            <div class="m-3">
                Code : <?php echo $code; ?>
            </div>
            <div class="m-3">
                Description : <?php echo $description; ?>
            </div>
            <div class="m-3">
                Pays : <?php echo $pays; ?>
            </div>
            <div class="m-3">
                Statut : <span class="badge bg-primary rounded-pill"><?php echo $statut; ?></span>
            </div>
        </div>
        <div class="col-sm-3">
            <h3>Contacts & planque</h3>
            <div class="m-3">
                Contact : <?php
                            foreach ($contacts as $contact) {
                                echo $contact;
                            }
                            ?>
            </div>
            <div class="m-3">
                Planque : <?php echo $planque . "<br>" . $pAdresse; ?>
            </div>
        </div>
        <div class="col-sm-3">
            <h3>Cible</h3>
            <img src="./public/assets/img/cibles/<?php echo $cible; ?>.jpg" width="200px">
            <?php echo $cible; ?>
        </div>
        <div class="col-sm-3">
            <h3>Agents</h3>
            <img src="./public/assets/img/agents/<?php echo $agent; ?>.jpg" width="200px">
            <?php echo $agent; ?>
        </div>
    </div>
</div>