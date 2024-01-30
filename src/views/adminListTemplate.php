<tr class="table-secondary" id="am-ligne<?php echo $i; ?>">
    <td><?php echo $i; ?><input type="hidden" id="id<?php echo $i; ?>" name="id<?php echo $i; ?>" value="<?php echo $id; ?>"></td>
    <td><input type="text" class="form-control" id="prenom<?php echo $i; ?>" name="code<?php echo $i; ?>" value="<?php echo $prenom; ?>"></td>
    <td><input type="text" class="form-control" id="nom<?php echo $i; ?>" name="adresse<?php echo $i; ?>" value="<?php echo $nom; ?>"></td>
    <td><input type="date" class="form-control" id="dt_crea<?php echo $i; ?>" name="pays<?php echo $i; ?>" value="<?php echo $dt_crea; ?>"></td>
    <td><button type="submit" class="btn btn-danger" id="supp_admin_<?php echo $i; ?>" name="supp_admin_<?php echo $i; ?>">Supprimer</button></td>
</tr>