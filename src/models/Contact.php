<?php

class Contact {

    private int $id_ct;
    private string $prenom_ct;
    private string $nom_ct;
    private string $dt_naissance_ct;
    private string $identification_code_ct;
    private string $nationalite_ct;
    private string $profil_ct;
    private string $sexe_ct;
    private int $age_ct;
    
    public function __construct(int $id_ct, string $prenom_ct, string $nom_ct, string $dt_naissance_ct, string $identification_code_ct, string $nationalite_ct, 
    string $profil_ct, string $sexe_ct, int $age_ct)
    {
    $this->id_ct=$id_ct;
    $this->prenom_ct=$prenom_ct;
    $this->nom_ct=$nom_ct;
    $this->dt_naissance_ct=$dt_naissance_ct;
    $this->identification_code_ct=$identification_code_ct;
    $this->nationalite_ct=$nationalite_ct;
    $this->profil_ct=$profil_ct;
    $this->sexe_ct=$sexe_ct;
    $this->age_ct=$age_ct;
    }
    
    public function getIdCt()
    {
    $this->id_ct;
    }
    
    public function getPrenomCt()
    {
    $this->prenom_ct;
    }
    
    public function getNomCt()
    {
    $this->nom_ct;
    }
    
    public function getDtNaissanceCt()
    {
    $this->dt_naissance_ct;
    }
    
    public function getIdentificationCodeCt()
    {
    $this->identification_code_ct;
    }
    
    public function getNationaliteCt()
    {
    $this->nationalite_ct;
    }
    
    public function getImgCt()
    {
    $this->profil_ct;
    }
    
    public function getSexeCt()
    {
    $this->sexe_ct;
    }
    
    public function getAgeCt()
    {
    $this->age_ct;
    }
    
    public function setIdCt($id_ct)
    {
    $this->id_ct=$id_ct;
    }
    
    public function setPrenomCt($prenom_ct)
    {
    $this->prenom_ct=$prenom_ct;
    }
    
    public function setNomCt($nom_ct)
    {
    $this->nom_ct=$nom_ct;
    }
    
    public function setDtNaissanceCt($dt_naissance_ct)
    {
    $this->dt_naissance_ct=$dt_naissance_ct;
    }
    
    public function setIdentificationCodeCt($identification_code_ct)
    {
    $this->identification_code_ct=$identification_code_ct;
    }
    
    public function setNationaliteCt($nationalite_ct)
    {
    $this->nationalite_ct=$nationalite_ct;
    }
    
    public function setImgCt($profil_ct)
    {
    $this->profil_ct=$profil_ct;
    }
    
    public function setSexeCt($sexe_ct)
    {
    $this->sexe_ct=$sexe_ct;
    }
    
    public function setAgeCt($age_ct)
    {
    $this->age_ct=$age_ct;
    }
    
    }