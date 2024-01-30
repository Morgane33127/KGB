<?php

class ContactManager
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


  public function getContactsList($page, $limit): array
  {
    require_once 'Contact.php';
    $offset = ($page - 1) * $limit;
    $stmt = $this->pdo->prepare("SELECT * FROM contacts LIMIT :limit OFFSET :offset");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $contacts = $stmt->fetchAll();
    if (count($contacts) > 0) {
      return ($contacts);
    } else {
      $contacts = array();
      return ($contacts);
    }
  }

  public function countContacts(): int
  {
    $stmt = $this->pdo->query("SELECT COUNT(*) as count FROM contacts")->fetch(PDO::FETCH_ASSOC);
    $count = $stmt['count'];
    return $count;
  }

  public function majContact($prenom, $nom, $dt_naissance, $code, $nat, $sex, $age, $id)
  {
    $stmt = $this->pdo->prepare("UPDATE contacts SET prenom_ct=?,nom_ct=?,dt_naissance_ct=?,identification_code_ct=?,nationalite_ct=?,sexe_ct=?,age_ct=? WHERE id_ct = ?");
    $stmt->execute([$prenom, $nom, $dt_naissance, $code, $nat, $sex, $age, $id]);
  }

  public function addContact($prenom, $nom, $dt_naissance, $code, $nat, $sex, $age)
  {
    $stmt = $this->pdo->prepare("INSERT INTO contacts (prenom_ct, nom_ct, dt_naissance_ct, identification_code_ct, nationalite_ct, profil_ct, sexe_ct, age_ct) 
    VALUES (?,?,?,?,?,?,?,?) ");
    $stmt->execute([$prenom, $nom, $dt_naissance, $code, $nat, '', $sex, $age]);
  }

  public function suppContact($id)
  {
    $stmt = $this->pdo->prepare("DELETE FROM contacts WHERE id_ct = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
  }

  public function listeContacts(): array
  {
    require_once 'Contact.php';
    $stmt = $this->pdo->query("SELECT id_ct, prenom_ct, nom_ct, nationalite_ct FROM contacts");
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($contacts) > 0) {
      return ($contacts);
    } else {
      $contacts = array();
      return ($contacts);
    }
  }
}
