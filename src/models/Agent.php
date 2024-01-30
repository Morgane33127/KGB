<?php

class Agent
{
    private string $id_a;
    private string $prenom_a;
    private string $nom_a;
    private string $dt_naissance_a;
    private string $identification_code_a;
    private string $nationalite_a;
    private string $spe_a;
    private string $mdp_a;
    private string $profil_a;
    private string $sexe_a;
    private int $age_a;
    private string $statut_a;

    public function __construct(
        string $id_a,
        string $prenom_a,
        string $nom_a,
        string $dt_naissance_a,
        string $identification_code_a,
        string $nationalite_a,
        string $spe_a,
        string $mdp_a,
        string $profil_a,
        string $sexe_a,
        int $age_a,
        string $statut_a
    ) {
        $this->id_a = $id_a;
        $this->prenom_a = $prenom_a;
        $this->nom_a = $nom_a;
        $this->dt_naissance_a = $dt_naissance_a;
        $this->identification_code_a = $identification_code_a;
        $this->nationalite_a = $nationalite_a;
        $this->spe_a = $spe_a;
        $this->mdp_a = $mdp_a;
        $this->profil_a = $profil_a;
        $this->sexe_a = $sexe_a;
        $this->age_a = $age_a;
        $this->statut_a = $statut_a;
    }

    public function getIdAg()
    {
        $this->id_a;
    }

    public function getPrenomAg()
    {
        $this->prenom_a;
    }

    public function getNomAg()
    {
        $this->nom_a;
    }

    public function getDtNaissanceAg()
    {
        $this->dt_naissance_a;
    }

    public function getIdendificationCodeAg()
    {
        $this->identification_code_a;
    }

    public function getNationaliteAg()
    {
        $this->nationalite_a;
    }

    public function getSpeAg()
    {
        $this->spe_a;
    }

    public function getPssdAg()
    {
        $this->mdp_a;
    }

    public function getImgAg()
    {
        $this->profil_a;
    }

    public function getSexeAg()
    {
        $this->sexe_a;
    }

    public function getAgeAg()
    {
        $this->age_a;
    }

    public function getSatutAg()
    {
        $this->statut_a;
    }

    public function setIdAg($id_a)
    {
        $this->id_a = $id_a;
    }

    public function setPrenomAg($prenom_a)
    {
        $this->prenom_a = $prenom_a;
    }

    public function setNomAg($nom_a)
    {
        $this->nom_a = $nom_a;
    }

    public function setDtNaissanceAg($dt_naissance_a)
    {
        $this->dt_naissance_a = $dt_naissance_a;
    }

    public function setIdentificationCodeAg($identification_code_a)
    {
        $this->identification_code_a = $identification_code_a;
    }

    public function setNationaliteAg($nationalite_a)
    {
        $this->nationalite_a = $nationalite_a;
    }

    public function setSpeAg($spe_a)
    {
        $this->spe_a = $spe_a;
    }

    public function setPssdAg($mdp_a)
    {
        $this->mdp_a = $mdp_a;
    }

    public function setImg($profil_a)
    {
        $this->profil_a = $profil_a;
    }

    public function setSexeAg($sexe_a)
    {
        $this->sexe_a = $sexe_a;
    }

    public function setAgeAg($age_a)
    {
        $this->age_a = $age_a;
    }

    public function setStatutAg($statut_a)
    {
        $this->statut_a = $statut_a;
    }
}
