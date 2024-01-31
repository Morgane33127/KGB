<?php

include_once '../vendor/autoload.php';

use Ramsey\Uuid\Uuid;

$uuid1 = Uuid::uuid4()->toString();
$uuid2 = Uuid::uuid4()->toString();
$uuid3 = Uuid::uuid4()->toString();

$uuid_m1 = Uuid::uuid4()->toString();
$uuid_m2 = Uuid::uuid4()->toString();

try {
  $db = new Database();
  $pdo = $db->getConnection();

  $mdp = password_hash('kKdy23Y8r76xHH', PASSWORD_DEFAULT);

  if (
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('00', 'Non attribué')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('IN', 'Infiltration')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('AS', 'Assassinat')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('AD', 'Agent double')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('01', 'En mission')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('02', 'En congés')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('03', 'Disponible')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('Z1', 'Urbain')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('Z2', 'Rural')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('EP', 'En préparation')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('EC', 'En cours')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('TE', 'Terminée')") &&
    $pdo->exec("INSERT INTO lbl (code_lbl, lbl) VALUES ('FA', 'Echec')") &&

    $pdo->exec("INSERT INTO agents (id_a, prenom_a, nom_a, dt_naissance_a, identification_code_a, nationalite_a, spe_a, mdp_a, profil_a, sexe_a, age_a, statut_a) 
    VALUES ('$uuid1', 'Samantha', 'Simpson', '1995-06-13', 'G8myV3m9', 'RU', 'IN', 'bMLrX265b2Zrh3', '', 'F', 28, '03')") &&
    $pdo->exec("INSERT INTO agents (id_a, prenom_a, nom_a, dt_naissance_a, identification_code_a, nationalite_a, spe_a, mdp_a, profil_a, sexe_a, age_a, statut_a) 
    VALUES ('$uuid2', 'Clover', 'Ewing', '1999-01-18', '4H7j2Gvf', 'RU', 'AS', 'b263r2rZL5bXMh', '', 'F', 24, '01')") &&
    $pdo->exec("INSERT INTO agents (id_a, prenom_a, nom_a, dt_naissance_a, identification_code_a, nationalite_a, spe_a, mdp_a, profil_a, sexe_a, age_a, statut_a) 
        VALUES ('$uuid3', 'Alexandra', 'Vasquez', '1998-10-24', 'u55PgTq4', 'RU', 'IN', 'HyxkY3K27rdH86', '', 'F', 25, '01')") &&

    $pdo->exec("INSERT INTO cibles (nom_c, prenom_c, dt_naissance_c, identification_code_c, nationalite_c, profil_c, sexe_c, age_c) 
VALUES ('Doe', 'John', '1980-01-04', 'syY697Py', 'FR', '', 'H', 44)") &&
    $pdo->exec("INSERT INTO cibles (nom_c, prenom_c, dt_naissance_c, identification_code_c, nationalite_c, profil_c, sexe_c, age_c) 
VALUES ('Leroy', 'Mayline', '1992-01-04', '7j6NeEJ6w4', 'AU', '', 'F', 32)") &&

    $pdo->exec("INSERT INTO contacts (prenom_ct, nom_ct, dt_naissance_ct, identification_code_ct, nationalite_ct, profil_ct, sexe_ct, age_ct) 
VALUES ('Ornella', 'Lucciano', '1988-07-23', 'ys6YyP79', 'IT', '', 'F', 35)") &&
    $pdo->exec("INSERT INTO contacts (prenom_ct, nom_ct, dt_naissance_ct, identification_code_ct, nationalite_ct, profil_ct, sexe_ct, age_ct) 
VALUES ('Harry', 'Stephenson', '2003-01-11', 'ys69YyP7', 'AU', '', 'H', 21)") &&

    $pdo->exec("INSERT INTO planques (code_p, adresse_p, pays_p, type_p) 
VALUES ('yY7y69sP', '1 rue du Surf 0800 Australia', 'AU', 'Z1')") &&
    $pdo->exec("INSERT INTO planques (code_p, adresse_p, pays_p, type_p) 
VALUES ('74Fax5sP', 'Via Rocca de Baldi 69', 'IT', 'Z1')") &&

    $pdo->exec("INSERT INTO missions (id_m, titre_m, description_m, code_m, pays_m, id_a, id_c, id_ct, type_m, statut_m, id_p, spe_m, dt_debut_m, dt_fin_m) 
VALUES ('$uuid_m1', 'Black Mamba', 'Assassinat de la cible', 'w637UrB62kYxXr', 'IT', '$uuid2', 1, 1, 'AS', 'EP', 2, 'AS', '2024-02-01', '2024-02-26')") &&

    $pdo->exec("INSERT INTO missions (id_m, titre_m, description_m, code_m, pays_m, id_a, id_c, id_ct, type_m, statut_m, id_p, spe_m, dt_debut_m, dt_fin_m) 
VALUES ('$uuid_m2', 'Roscosmos', 'Infiltration', '4hE6z9TcELw6q7', 'AU', '$uuid3', 2, 2, 'IN', 'EC', 1, 'IN', '2024-02-01', '2024-02-26')") &&

    $pdo->exec("INSERT INTO admin (prenom_g, nom_g, mail_g, mdp_g, dt_crea) 
VALUES ('Jerry', 'Lewis', 'jerry.lewis@superadmin.com', '$mdp', '2006-08-14')")
    !== false
  ) {
    echo "Ajout réussis <br>";
  } else {
    echo "Données non ajoutées à la BDD <br>";
    error("Données non ajoutées à la BDD");
  }
} catch (PDOException $exception) {
  error($exception->getMessage());
  die($exception->getMessage());
}
