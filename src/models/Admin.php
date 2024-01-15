<?php

class Admin {
    private int $id_i;
    private string $prenom_g;
    private string $nom_g;
    private string $mail_g;
    private string $mdp_g;
    private string $dt_crea;

    public function __construct(int $id_i, string $prenom_g, string $nom_g, string $mail_g, string $mdp_g, string $dt_crea)
    {
        $this->id_i = $id_i;
        $this->prenom_g = $prenom_g;
        $this->nom_g = $nom_g;
        $this->mail_g = $mail_g;
        $this->mdp_g = $mdp_g;
        $this->dt_crea = $dt_crea;
    }

    public function getId()
    {
        $this->id_i;
    }

    public function getPrenom()
    {
        $this->prenom_g;
    }

    public function getNom()
    {
        $this->nom_g;
    }

    public function getMail()
    {
        $this->mail_g;
    }

    public function getPssd()
    {
        $this->mdp_g;
    }

    public function getDtCrea()
    {
        $this->dt_crea;
    }

    public function setId($id_i)
    {
        $this->id_i = $id_i;
    }

    public function setPrenom($prenom_g)
    {
        $this->prenom_g=$prenom_g;
    }

    public function setNom($nom_g)
    {
        $this->nom_g=$nom_g;
    }

    public function setMail($mail_g)
    {
        $this->mail_g=$mail_g;
    }

    public function setPssd($mdp_g)
    {
        $this->mdp_g=$mdp_g;
    }

    public function setDtCrea($dt_crea)
    {
        $this->dt_crea=$dt_crea;
    }

}