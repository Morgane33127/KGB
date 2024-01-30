<?php

/* EN : Entrance door to the site. We integrate the header.
The index acts as a router.

FR : Porte d'entrée du site. On intègre le header.
L'index joue le rôle de routeur.
*/
session_start();
require_once 'src/views/header.php';

if (!empty($_GET['page'])) {
  switch ($_GET['page']) {
    case 'missionDetail':
      require('src/ficheMission.php');
      break;
    case 'login':
      require('src/login.php');
      break;
    case 'administr':
      require('src/administration.php');
      break;
    case 'request':
      require('src/request.php');
      break;
    case 'missions':
      require('src/home.php');
      break;
    case 'agents':
      require('src/agents.php');
      break;
  }
} else {
  require('src/home.php');
}
