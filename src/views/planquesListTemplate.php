<tr class="table-secondary" id="pl-ligne<?php echo $i; ?>">
    <td><?php echo $i; ?><input type="hidden" id="id<?php echo $i; ?>" name="id<?php echo $i; ?>" value="<?php echo $id; ?>"></td>
    <td><input type="text" class="form-control" id="code<?php echo $i; ?>" name="code<?php echo $i; ?>" value="<?php echo $code; ?>"></td>
    <td><input type="text" class="form-control" id="adresse<?php echo $i; ?>" name="adresse<?php echo $i; ?>" value="<?php echo $adresse; ?>"></td>
    <td><input type="text" class="form-control" id="pays<?php echo $i; ?>" name="pays<?php echo $i; ?>" value="<?php echo $pays; ?>"></td>
    <td><input type="text" class="form-control" id="type<?php echo $i; ?>" name="type<?php echo $i; ?>" value="<?php echo $type; ?>"></td>
    <td><button type="submit" class="btn btn-danger" id="supp_p_<?php echo $i; ?>" name="supp_p_<?php echo $i; ?>">Supprimer</button></td>
</tr>