<?php

class AdminManager
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

  
  public function getAdminList($page, $limit): array
  {
    require_once 'Admin.php';
    $offset = ($page - 1) * $limit;
    $stmt = $this->pdo->prepare("SELECT * FROM admin LIMIT :limit OFFSET :offset");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $admin = $stmt->fetchAll();
    if (count($admin) > 0) {
      return ($admin);
    } else {
      $admin = array();
      return ($admin);
    }
  }

  public function countAdmin(): int
  {
    $stmt = $this->pdo->query("SELECT COUNT(*) as count FROM admin")->fetch(PDO::FETCH_ASSOC);
    $count = $stmt['count'];
    return $count;
  }

  public function majAdmin($prenom, $nom, $id)
  {
    $stmt = $this->pdo->prepare("UPDATE admin SET prenom_g=?,nom_g=? WHERE id_i = ?");
    $stmt->execute([$prenom, $nom, $id]);

  }

  
  public function addAdmin($prenom, $nom, $mail, $mdp, $dt)
  {
    $stmt = $this->pdo->prepare("INSERT INTO admin (prenom_g, nom_g, mail_g, mdp_g, dt_crea) 
    VALUES (?,?,?,?,?) ");
    $stmt->execute([$prenom, $nom, $mail, $mdp, $dt]);

  }

  public function suppAdmin($id)
  {
    $stmt = $this->pdo->prepare("DELETE FROM admin WHERE id_i = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

  }


}
