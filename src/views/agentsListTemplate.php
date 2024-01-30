<?php

if (isset($_GET['page']) && $_GET['page'] === "administr") { ?>

    <tr class="table-secondary" id="ag-ligne<?php echo $i; ?>">
        <td><?php echo $i; ?><input type="hidden" id="id<?php echo $i; ?>" name="id<?php echo $i; ?>" value="<?php echo $id; ?>"></td>
        <td><input type="text" class="form-control" id="prenom<?php echo $i; ?>" name="prenom<?php echo $i; ?>" value="<?php echo $prenom; ?>"></td>
        <td><input type="text" class="form-control" id="nom<?php echo $i; ?>" name="nom<?php echo $i; ?>" value="<?php echo $nom; ?>"></td>
        <td><input type="date" class="form-control" id="dt_naissance<?php echo $i; ?>" name="dt_naissance<?php echo $i; ?>" value="<?php echo $dt_naissance; ?>"></td>
        <td><input type="text" class="form-control" id="code<?php echo $i; ?>" name="code<?php echo $i; ?>" value="<?php echo $code; ?>"></td>
        <td><input type="text" class="form-control" id="nat<?php echo $i; ?>" name="nat<?php echo $i; ?>" value="<?php echo $nationalite; ?>"></td>
        <td><input type="text" class="form-control" id="spe<?php echo $i; ?>" name="spe<?php echo $i; ?>" value="<?php echo $spe; ?>"></td>
        <td><input type="text" class="form-control" id="sex<?php echo $i; ?>" name="sex<?php echo $i; ?>" value="<?php echo $sexe; ?>"></td>
        <td><input type="text" class="form-control" id="age<?php echo $i; ?>" name="age<?php echo $i; ?>" value="<?php echo $age; ?>"></td>
        <td><?php echo $img; ?></td>
        <td><span class="badge bg-info rounded-pill"><?php echo $statut; ?></span></td>
        <td>
            <button type="button" class="btn btn-primary m-1" id="01-<?php echo $i; ?>" name="01-<?php echo $i; ?>">En mission</button>
            <button type="button" class="btn btn-primary m-1" id="02-<?php echo $i; ?>" name="02-<?php echo $i; ?>">En congés</button>
            <button type="button" class="btn btn-primary m-1" id="03-<?php echo $i; ?>" name="03-<?php echo $i; ?>">Dispo</button>
        </td>
        <td>
            <button type="submit" class="btn btn-danger" id="supp_agent_<?php echo $i; ?>" name="supp_agent_<?php echo $i; ?>">Supprimer</button>
        </td>
    </tr>

<?php
} else { ?>

    <tr class="table-secondary" id="ag-ligne<?php echo $i; ?>">
        <td><?php echo $i; ?></td>
        <td><?php echo $prenom; ?></td>
        <td><?php echo $nom; ?></td>
        <td><?php echo $dt_naissance; ?></td>
        <td><?php echo $code; ?></td>
        <td><?php echo $nationalite; ?></td>
        <td><?php echo $spe; ?></td>
        <td><?php echo $sexe; ?></td>
        <td><?php echo $age; ?></td>
        <td><?php echo $img; ?></td>
        <td><span class="badge bg-info rounded-pill"><?php echo $statut; ?></span></td>
    </tr>

<?php
}
