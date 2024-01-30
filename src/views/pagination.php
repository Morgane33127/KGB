<!-- Pagination -->
<nav aria-label="Page navigation" id="pagination">
  <ul class="pagination justify-content-center">
    <?php
    if (isset($_GET['page'])) {
      $dash = "&p=";
    } else {
      $dash = "?p=";
    }
    for ($k = 1; $k <= ceil($count / $limit); $k++) {
      if ((isset($_GET['p']) && $_GET['p'] == $k)) {
        $active = 'active';
      } else {
        $active = '';
      }
      if ($k > 10) { ?>
        <li class="page-item"><a class="page-link" href="index.php?p=<?php echo $k; ?>">.</a></li>
      <?php } else { ?>
        <li class="page-item <?php if ($k == 1) {
                                echo $active;
                              } else {
                                echo $active;
                              } ?>"><a class="page-link" href="<?php echo $_SERVER['REQUEST_URI'] . $dash . $k; ?>"><?php echo $k; ?></a></li>
    <?php }
    } ?>
  </ul>
</nav>