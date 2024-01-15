<?php
include_once '../config/Database.php';
require '../config/functions.php';

/* EN : Database and tables creation and add data
FR : Creation de la base de donnée, creation des tables et ajouts de données
*/

try {
    $db = new Database();
    $pdo = $db->createDatabase();

    if ($pdo->exec('DROP DATABASE IF EXISTS kgb') !== false) {
        if ($pdo->exec('CREATE DATABASE kgb') !== false) {
            $newpdo = $db->getConnection();

            $agents = 'CREATE TABLE agents (
   id_a UUID NOT NULL,
   prenom_a VARCHAR(30) NOT NULL,
   nom_a VARCHAR(30) NOT NULL,
   dt_naissance_a VARCHAR(10) NOT NULL,
   identification_code_a VARCHAR(150) NOT NULL,
   nationalite_a CHAR(2) NOT NULL,
   spe_a CHAR(2) NOT NULL,
   mdp_a VARCHAR(150) NOT NULL,
   profil_a VARCHAR(30),
   sexe_a CHAR(1) NOT NULL,
   age_a INT(2) NOT NULL,
   statut_a CHAR(2) NOT NULL
)';

            $lbl = 'CREATE TABLE lbl (
  id_lbl INT PRIMARY KEY AUTO_INCREMENT,
  code_lbl CHAR(3) NOT NULL,
  lbl VARCHAR(100) NOT NULL
)';

            $cibles = 'CREATE TABLE cibles (
  id_c INT PRIMARY KEY AUTO_INCREMENT,
  nom_c VARCHAR(30) NOT NULL,
  prenom_c VARCHAR(30) NOT NULL,
  dt_naissance_c VARCHAR(10) NOT NULL,
  identification_code_c VARCHAR(150) NOT NULL,
  nationalite_c CHAR(2) NOT NULL,
  profil_c VARCHAR(30),
  sexe_c CHAR(1) NOT NULL,
  age_c INT(2) NOT NULL
)';

            $contacts = 'CREATE TABLE contacts (
  id_ct INT PRIMARY KEY AUTO_INCREMENT,
  prenom_ct VARCHAR(30) NOT NULL,
  nom_ct VARCHAR(30) NOT NULL,
  dt_naissance_ct VARCHAR(10) NOT NULL,
  identification_code_ct VARCHAR(150) NOT NULL,
  nationalite_ct CHAR(2) NOT NULL,
  profil_ct VARCHAR(30),
  sexe_ct CHAR(1) NOT NULL,
  age_ct INT(2) NOT NULL
)';

            $planques = 'CREATE TABLE planques (
  id_p INT PRIMARY KEY AUTO_INCREMENT,
  code_p VARCHAR(30) NOT NULL,
  adresse_p VARCHAR(150) NOT NULL,
  pays_p CHAR(2) NOT NULL,
  type_p CHAR(2) NOT NULL
)';

            $missions = 'CREATE TABLE missions (
  id_m UUID NOT NULL,
  titre_m VARCHAR(100) NOT NULL,
  description_m VARCHAR(500) NOT NULL,
  code_m VARCHAR(30) NOT NULL,
  pays_m CHAR(2) NOT NULL,
  id_a UUID NOT NULL,
  id_c INT NOT NULL,
  id_ct INT NOT NULL,
  type_m CHAR(2) NOT NULL,
  statut_m CHAR(2) NOT NULL,
  id_p INT,
  spe_m CHAR(2) NOT NULL,
  dt_debut_m VARCHAR(10) NOT NULL,
  dt_fin_m VARCHAR(10) NOT NULL,
  FOREIGN KEY (id_a) REFERENCES agents (id_a),
  FOREIGN KEY (id_c) REFERENCES cibles (id_c),
  FOREIGN KEY (id_ct) REFERENCES contacts (id_ct),
  FOREIGN KEY (id_p) REFERENCES planques (id_p)
)';

            $admin = 'CREATE TABLE admin (
  id_i INT PRIMARY KEY AUTO_INCREMENT,
  prenom_g VARCHAR(30) NOT NULL,
  nom_g VARCHAR(30) NOT NULL,
  mail_g VARCHAR(150) NOT NULL,
  mdp_g VARCHAR(100) NOT NULL,
  dt_crea VARCHAR(10) NOT NULL
)';

            $table = array($agents, $lbl, $cibles, $contacts, $planques, $missions, $admin);

            foreach ($table as $tabl) {
                if ($newpdo->exec($tabl) !== false) {
                    echo "$tabl : Installation réussis !<br>";
                } else {
                    echo 'Erreur installation !<br>';
                }
            }
            //If all ok -> Add data
            require 'insert_data.php';
        } else {
            echo 'Impossible de créer la base<br>';
        }
    }
} catch (PDOException $exception) {
    error($exception->getMessage());
    die($exception->getMessage());
}
