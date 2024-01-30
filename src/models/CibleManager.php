<?php

class CibleManager
{

  private PDO $pdo;

  /**
   * Constructor
   *
   */
  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }


  public function getCiblesList($page, $limit): array
  {
    require_once 'Cible.php';
    $offset = ($page - 1) * $limit;
    $stmt = $this->pdo->prepare("SELECT * FROM cibles LIMIT :limit OFFSET :offset");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $cibles = $stmt->fetchAll();
    if (count($cibles) > 0) {
      return ($cibles);
    } else {
      $cibles = array();
      return ($cibles);
    }
  }

  public function countCibles(): int
  {
    $stmt = $this->pdo->query("SELECT COUNT(*) as count FROM cibles")->fetch(PDO::FETCH_ASSOC);
    $count = $stmt['count'];
    return $count;
  }

  public function majCible($prenom, $nom, $dt_naissance, $code, $nat, $sex, $age, $id)
  {
    $stmt = $this->pdo->prepare("UPDATE cibles SET prenom_c=?,nom_c=?,dt_naissance_c=?,identification_code_c=?,nationalite_c=?,sexe_c=?,age_c=? WHERE id_c = ?");
    $stmt->execute([$prenom, $nom, $dt_naissance, $code, $nat, $sex, $age, $id]);
  }

  public function addCible($prenom, $nom, $dt_naissance, $code, $nat, $sex, $age)
  {
    $stmt = $this->pdo->prepare("INSERT INTO cibles (prenom_c, nom_c, dt_naissance_c, identification_code_c, nationalite_c, profil_c, sexe_c, age_c) 
    VALUES (?,?,?,?,?,?,?,?) ");
    $stmt->execute([$prenom, $nom, $dt_naissance, $code, $nat, '', $sex, $age]);
  }

  public function suppCible($id)
  {
    $stmt = $this->pdo->prepare("DELETE FROM cibles WHERE id_c = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
  }

  public function listeCibles(): array
  {
    require_once 'Cible.php';
    $stmt = $this->pdo->query("SELECT id_c, prenom_c, nom_c, nationalite_c FROM cibles");
    $cibles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($cibles) > 0) {
      return ($cibles);
    } else {
      $cibles = array();
      return ($cibles);
    }
  }
}
