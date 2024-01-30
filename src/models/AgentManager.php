<?php

class AgentManager
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


  public function getAgentsList($page, $limit): array
  {
    require_once 'Agent.php';
    $offset = ($page - 1) * $limit;
    $stmt = $this->pdo->prepare("SELECT * FROM agents as t1 
    INNER JOIN lbl as t2 ON t1.spe_a=t2.code_lbl
    INNER JOIN lbl as t3 ON t1.statut_a=t3.code_lbl
    LIMIT :limit OFFSET :offset");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $agents = $stmt->fetchAll();
    if (count($agents) > 0) {
      return ($agents);
    } else {
      $agents = array();
      return ($agents);
    }
  }

  public function countAgents(): int
  {
    $stmt = $this->pdo->query("SELECT COUNT(*) as count FROM agents")->fetch(PDO::FETCH_ASSOC);
    $count = $stmt['count'];
    return $count;
  }

  public function majAgent($prenom, $nom, $dt_naissance, $code, $nat, $spe, $sex, $age, $id)
  {
    $stmt = $this->pdo->prepare("UPDATE agents SET prenom_a=?,nom_a=?,dt_naissance_a=?,identification_code_a=?,nationalite_a=?,spe_a=?,sexe_a=?,age_a=? WHERE id_a = ?");
    $stmt->execute([$prenom, $nom, $dt_naissance, $code, $nat, $spe, $sex, $age, $id]);
  }

  public function changeStatut($id, $statut)
  {
    $stmt = $this->pdo->prepare("UPDATE agents SET statut_a=? WHERE id_a = ?");
    $stmt->execute([$statut, $id]);
  }

  public function addAgent($uuid, $prenom, $nom, $dt_naissance, $code, $nat, $spe, $mdp, $sex, $age, $statut)
  {
    $stmt = $this->pdo->prepare("INSERT INTO agents (id_a, prenom_a, nom_a, dt_naissance_a, identification_code_a, nationalite_a, spe_a, mdp_a, profil_a, sexe_a, age_a, statut_a) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?) ");
    $stmt->execute([$uuid, $prenom, $nom, $dt_naissance, $code, $nat, $spe, $mdp, "NULL", $sex, $age, $statut]);
  }

  public function suppAgent($uuid)
  {
    $stmt = $this->pdo->prepare("DELETE FROM agents WHERE id_a = :uuid");
    $stmt->bindValue(':uuid', $uuid, PDO::PARAM_STR);
    $stmt->execute();
  }

  public function filtre($spe, $natio, $stat): array
  {
    $stmt = $this->pdo->query("SELECT * FROM agents as t1 
    INNER JOIN lbl as t2 ON t1.spe_a=t2.code_lbl
    INNER JOIN lbl as t3 ON t1.statut_a=t3.code_lbl
    WHERE t1.spe_a LIKE '$spe' AND t1.nationalite_a LIKE '$natio' AND t1.statut_a LIKE '$stat' ");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function listeAgents(): array
  {
    require_once 'Agent.php';
    $stmt = $this->pdo->query("SELECT id_a, prenom_a, nom_a, nationalite_a, spe_a FROM agents");
    $agents = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($agents) > 0) {
      return ($agents);
    } else {
      $agents = array();
      return ($agents);
    }
  }
}
