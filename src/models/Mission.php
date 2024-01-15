<?php

class Mission {

    private string $id_m;
    private string $titre_m;
    private string $description_m;
    private string $code_m;
    private string $pays_m;
    private string $id_a;
    private string $id_c;
    private string $id_ct;
    private string $type_m;
    private string $statut_m;
    private string $id_p;
    private string $spe_m;
    private string $dt_debut_m;
    private string $dt_fin_m;
    
    public function __construct(string $id_m, string $titre_m, string $description_m, string $code_m, string $pays_m, string $id_a, string $id_c, string $id_ct, string $type_m, string $statut_m, string $id_p, string $spe_m, string $dt_debut_m, string $dt_fin_m)
    {
    $this->id_m=$id_m;
    $this->titre_m=$titre_m;
    $this->description_m=$description_m;
    $this->code_m=$code_m;
    $this->pays_m=$pays_m;
    $this->id_a=$id_a;
    $this->id_c=$id_c;
    $this->id_ct=$id_ct;
    $this->type_m=$type_m;
    $this->statut_m=$statut_m;
    $this->id_p=$id_p;
    $this->spe_m=$spe_m;
    $this->dt_debut_m=$dt_debut_m;
    $this->dt_fin_m=$dt_fin_m;
    }
    
    public function getIdM()
    {
    $this->id_m;
    }
    
    public function getTitreM()
    {
    $this->titre_m;
    }
    
    public function getDescriptionM()
    {
    $this->description_m;
    }
    
    public function getCodeM()
    {
    $this->code_m;
    }
    
    public function getPaysM()
    {
    $this->pays_m;
    }
    
    public function getIdAg()
    {
    $this->id_a;
    }
    
    public function getIdC()
    {
    $this->id_c;
    }
    
    public function getIdCt()
    {
    $this->id_ct;
    }
    
    public function getTypeM()
    {
    $this->type_m;
    }
    
    public function getStatutM()
    {
    $this->statut_m;
    }
    
    public function getIdP()
    {
    $this->id_p;
    }
    
    public function getSpeM()
    {
    $this->spe_m;
    }
    
    public function getDtDebut()
    {
    $this->dt_debut_m;
    }
    
    public function getDtFin()
    {
    $this->dt_fin_m;
    }
    
    public function setIdM($id_m)
    {
    $this->id_m=$id_m;
    }
    
    public function setTitreM($titre_m)
    {
    $this->titre_m=$titre_m;
    }
    
    public function setDescriptionM($description_m)
    {
    $this->description_m=$description_m;
    }
    
    public function setCodeM($code_m)
    {
    $this->code_m=$code_m;
    }
    
    public function setPaysM($pays_m)
    {
    $this->pays_m=$pays_m;
    }
    
    public function setIdAg($id_a)
    {
    $this->id_a=$id_a;
    }
    
    public function setIdC($id_c)
    {
    $this->id_c=$id_c;
    }
    
    public function setIdCt($id_ct)
    {
    $this->id_ct=$id_ct;
    }
    
    public function setTypeM($type_m)
    {
    $this->type_m=$type_m;
    }
    
    public function setStatutM($statut_m)
    {
    $this->statut_m=$statut_m;
    }
    
    public function setIdP($id_p)
    {
    $this->id_p=$id_p;
    }
    
    public function setSpeM($spe_m)
    {
    $this->spe_m=$spe_m;
    }
    
    public function setDtDebut($dt_debut_m)
    {
    $this->dt_debut_m=$dt_debut_m;
    }
    
    public function setDtFin($dt_fin_m)
    {
    $this->dt_fin_m=$dt_fin_m;
    }
    
    }