<tr class="table-secondary" id="ci-ligne<?php echo $i; ?>">
    <td><?php echo $i; ?><input type="hidden" id="id<?php echo $i; ?>" name="id<?php echo $i; ?>" value="<?php echo $id; ?>"></td>
    <td><input type="text" class="form-control" id="prenom<?php echo $i; ?>" name="prenom<?php echo $i; ?>" value="<?php echo $prenom; ?>"></td>
    <td><input type="text" class="form-control" id="nom<?php echo $i; ?>" name="nom<?php echo $i; ?>" value="<?php echo $nom; ?>"></td>
    <td><input type="date" class="form-control" id="dt_naissance<?php echo $i; ?>" name="dt_naissance<?php echo $i; ?>" value="<?php echo $dt_naissance; ?>"></td>
    <td><input type="text" class="form-control" id="code<?php echo $i; ?>" name="code<?php echo $i; ?>" value="<?php echo $code; ?>"></td>
    <td><input type="text" class="form-control" id="nat<?php echo $i; ?>" name="nat<?php echo $i; ?>" value="<?php echo $nationalite; ?>"></td>
    <td><input type="text" class="form-control" id="sex<?php echo $i; ?>" name="sex<?php echo $i; ?>" value="<?php echo $sexe; ?>"></td>
    <td><input type="text" class="form-control" id="age<?php echo $i; ?>" name="age<?php echo $i; ?>" value="<?php echo $age; ?>"></td>
    <td><?php echo $img; ?></td>
    <td><button type="submit" class="btn btn-danger" id="supp_cible_<?php echo $i; ?>" name="supp_cible_<?php echo $i; ?>">Supprimer</button></td>
</tr>