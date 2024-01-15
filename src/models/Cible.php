<?php

class Cible
{

    private int $id_c;
    private string $nom_c;
    private string $prenom_c;
    private string $dt_naissance_c;
    private string $identification_code_c;
    private string $nationalite_c;
    private string $profil_c;
    private string $sexe_c;
    private int $age_c;

    public function __construct(int $id_c, string $nom_c, string $prenom_c, string $dt_naissance_c, string $identification_code_c, string $nationalite_c, string $profil_c, string $sexe_c, int $age_c)
    {
        $this->id_c = $id_c;
        $this->nom_c = $nom_c;
        $this->prenom_c = $prenom_c;
        $this->dt_naissance_c = $dt_naissance_c;
        $this->identification_code_c = $identification_code_c;
        $this->nationalite_c = $nationalite_c;
        $this->profil_c = $profil_c;
        $this->sexe_c = $sexe_c;
        $this->age_c = $age_c;
    }

    public function getIdCi()
    {
        $this->id_c;
    }

    public function getNomCi()
    {
        $this->nom_c;
    }

    public function getPrenomCi()
    {
        $this->prenom_c;
    }

    public function getDtNaissanceCi()
    {
        $this->dt_naissance_c;
    }

    public function getIdentificationCodeCi()
    {
        $this->identification_code_c;
    }

    public function getNationaliteCi()
    {
        $this->nationalite_c;
    }

    public function getImgCi()
    {
        $this->profil_c;
    }

    public function getSexeCi()
    {
        $this->sexe_c;
    }

    public function getAgeCi()
    {
        $this->age_c;
    }

    public function setIdCi($id_c)
    {
        $this->id_c = $id_c;
    }

    public function setNomCi($nom_c)
    {
        $this->nom_c = $nom_c;
    }

    public function setPrenomCi($prenom_c)
    {
        $this->prenom_c = $prenom_c;
    }

    public function setDtNaissanceCi($dt_naissance_c)
    {
        $this->dt_naissance_c = $dt_naissance_c;
    }

    public function setIdentificationCodeCi($identification_code_c)
    {
        $this->identification_code_c = $identification_code_c;
    }

    public function setNationaliteCi($nationalite_c)
    {
        $this->nationalite_c = $nationalite_c;
    }

    public function setImgCi($profil_c)
    {
        $this->profil_c = $profil_c;
    }

    public function setSexeCi($sexe_c)
    {
        $this->sexe_c = $sexe_c;
    }

    public function setAgeCi($age_c)
    {
        $this->age_c = $age_c;
    }
}
