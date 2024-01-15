<?php

/* EN : Entrance door to the site. We integrate the header.
The index acts as a router.

FR : Porte d'entrée du site. On intègre le header.
L'index joue le rôle de routeur.
*/

require_once 'src/views/header.php';

if (!empty($_GET['page'])) {
    switch ($_GET['page']) {
      case 'apropos':
        require('src/apropos.php');
        break;
  } 
}else {
    require('src/home.php');
  }