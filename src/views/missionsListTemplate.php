<?php

if (isset($_GET['page']) && $_GET['page'] === "administr") { ?>

    <tr class="table-secondary" id="mi-ligne<?php echo $i; ?>">
        <td><?php echo $i; ?><input type="hidden" id="id<?php echo $i; ?>" name="id<?php echo $i; ?>" value="<?php echo $id; ?>"></td>
        <td><input type="text" class="form-control" id="titre<?php echo $i; ?>" name="titre<?php echo $i; ?>" value="<?php echo $titre; ?>"></td>
        <td><input type="text" class="form-control" id="code<?php echo $i; ?>" name="code<?php echo $i; ?>" value="<?php echo $code; ?>"></td>
        <td><input type="text" class="form-control" id="description<?php echo $i; ?>" name="description<?php echo $i; ?>" value="<?php echo $description; ?>"></td>
        <td><input type="text" class="form-control" id="pays<?php echo $i; ?>" name="pays<?php echo $i; ?>" value="<?php echo $pays; ?>"></td>
        <td><input type="text" class="form-control" id="type<?php echo $i; ?>" name="type<?php echo $i; ?>" value="<?php echo $type; ?>"></td>
        <td><input type="text" class="form-control" id="agent<?php echo $i; ?>" name="agent<?php echo $i; ?>" value="<?php echo $agent; ?>"></td>
        <td><input type="text" class="form-control" id="cible<?php echo $i; ?>" name="cible<?php echo $i; ?>" value="<?php echo $cible; ?>"></td>
        <td><input type="date" class="form-control" id="dtDebut<?php echo $i; ?>" name="dtDebut<?php echo $i; ?>" value="<?php echo $dtDebut; ?>"></td>
        <td><input type="date" class="form-control" id="dtFin<?php echo $i; ?>" name="dtFin<?php echo $i; ?>" value="<?php echo $dtFin; ?>"></td>
        <td><button type="submit" class="btn btn-danger" id="supp_m_<?php echo $i; ?>" name="supp_m_<?php echo $i; ?>">Supprimer</button></td>
        <td><a href="?page=missionDetail&mission=<?php echo $id; ?>" target="_blank">Voir +</a></td>
    </tr>

<?php
} else { ?>

    <tr class="table-secondary">
        <td><?php echo $titre; ?></td>
        <td><?php echo $code; ?></td>
        <td><?php echo $description; ?></td>
        <td><?php echo $pays; ?></td>
        <td><span class="badge bg-warning rounded-pill"><?php echo $type; ?></span></td>
        <td><?php echo $agent; ?></td>
        <td><?php echo $cible; ?></td>
        <td><?php echo $dtDebut; ?></td>
        <td><?php echo $dtFin; ?></td>
        <td><a href="?page=missionDetail&mission=<?php echo $id; ?>" target="_blank">Voir +</a></td>
    </tr>

<?php
}
