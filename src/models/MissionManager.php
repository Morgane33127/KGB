<?php

class MissionManager
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

  /**
   * To list the missions
   *
   * @return array with missions
   */
  public function getMissionsList($page, $limit): array
  {
    require_once 'Mission.php';
    $offset = ($page - 1) * $limit;
    $stmt = $this->pdo->prepare("SELECT * FROM missions as t1 
    INNER JOIN agents as t2 ON t1.id_a=t2.id_a
    INNER JOIN cibles as t3 ON t1.id_c=t3.id_c 
    WHERE t1.statut_m<>'TE' LIMIT :limit OFFSET :offset");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $missions = $stmt->fetchAll();
    if (count($missions) > 0) {
      return ($missions);
    } else {
      $missions = array();
      return ($missions);
    }
  }

  public function getMissionInfos($id): array
  {
    require_once 'Mission.php';
    $stmt = $this->pdo->query("SELECT * FROM missions as t1 
    INNER JOIN agents as t2 ON t1.id_a=t2.id_a
    INNER JOIN cibles as t3 ON t1.id_c=t3.id_c
    INNER JOIN lbl as t4 ON t1.statut_m=t4.code_lbl
    INNER JOIN contacts as t5 ON t1.id_c=t5.id_ct
    INNER JOIN planques as t6 ON t1.id_p=t6.id_p
    WHERE id_m = '$id'");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $mission = $stmt->fetch();
    return $mission;
  }

  public function countMissions(): int
  {
    $stmt = $this->pdo->query("SELECT COUNT(*) as count FROM missions WHERE statut_m <> 'TE'")->fetch(PDO::FETCH_ASSOC);
    $count = $stmt['count'];
    return $count;
  }

  public function search($data): array
  {
    $stmt = $this->pdo->query("SELECT * FROM missions as t1 
    INNER JOIN agents as t2 ON t1.id_a=t2.id_a
    INNER JOIN cibles as t3 ON t1.id_c=t3.id_c 
    WHERE t1.description_m LIKE '%$data%' OR t1.titre_m LIKE '%$data%' ");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function addMission($uuid, $titre, $description, $code, $pays, $idAgent, $cible, $contact, $type, $statut, $planque, $spe, $dtDebut, $dtFin)
  {
    echo $idAgent;
    $stmt = $this->pdo->prepare("INSERT INTO missions (id_m, titre_m, description_m, code_m, pays_m, id_a, id_c, id_ct, type_m, statut_m, id_p, spe_m, dt_debut_m, dt_fin_m) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
    $stmt->execute([$uuid, $titre, $description, $code, $pays, $idAgent, $cible, $contact, $type, $statut, $planque, $spe, $dtDebut, $dtFin]);
  }

  public function suppMission($uuid)
  {
    $stmt = $this->pdo->prepare("DELETE FROM missions WHERE id_m = :uuid");
    $stmt->bindValue(':uuid', $uuid, PDO::PARAM_STR);
    $stmt->execute();
  }
}
