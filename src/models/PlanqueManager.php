<?php

class PlanqueManager
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


  public function getPlanquesList($page, $limit): array
  {
    require_once 'Planque.php';
    $offset = ($page - 1) * $limit;
    $stmt = $this->pdo->prepare("SELECT * FROM planques as t1
    INNER JOIN lbl as t2 ON t1.type_p=t2.code_lbl
    LIMIT :limit OFFSET :offset");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $planques = $stmt->fetchAll();
    if (count($planques) > 0) {
      return ($planques);
    } else {
      $planques = array();
      return ($planques);
    }
  }

  public function countPlanques(): int
  {
    $stmt = $this->pdo->query("SELECT COUNT(*) as count FROM planques")->fetch(PDO::FETCH_ASSOC);
    $count = $stmt['count'];
    return $count;
  }

  public function majPlanque($code, $adresse, $pays, $type, $id)
  {
    $stmt = $this->pdo->prepare("UPDATE planques SET code_p=?, adresse_p=?, pays_p=?, type_p=? WHERE id_p = ?");
    $stmt->execute([$code, $adresse, $pays, $type, $id]);
  }

  public function addPlanque($code, $adresse, $pays, $type)
  {
    $stmt = $this->pdo->prepare("INSERT INTO planques (code_p, adresse_p, pays_p, type_p) 
    VALUES (?,?,?,?) ");
    $stmt->execute([$code, $adresse, $pays, $type]);
  }

  public function suppPlanque($id)
  {
    $stmt = $this->pdo->prepare("DELETE FROM planques WHERE id_p = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
  }


  public function listePlanques(): array
  {
    require_once 'Planque.php';
    $stmt = $this->pdo->query("SELECT id_p, adresse_p FROM planques");
    $planques = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($planques) > 0) {
      return ($planques);
    } else {
      $planques = array();
      return ($planques);
    }
  }
}
