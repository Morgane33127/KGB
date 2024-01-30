<?php

class Planque
{

    private string $id_p;
    private string $code_p;
    private string $adresse_p;
    private string $pays_p;
    private string $type_p;

    public function __construct(string $id_p, string $code_p, string $adresse_p, string $pays_p, string $type_p)
    {
        $this->id_p = $id_p;
        $this->code_p = $code_p;
        $this->adresse_p = $adresse_p;
        $this->pays_p = $pays_p;
        $this->type_p = $type_p;
    }

    public function getIdP()
    {
        $this->id_p;
    }

    public function getCodeP()
    {
        $this->code_p;
    }

    public function getAdresseP()
    {
        $this->adresse_p;
    }

    public function getPaysP()
    {
        $this->pays_p;
    }

    public function getType_p()
    {
        $this->type_p;
    }

    public function setIdP($id_p)
    {
        $this->id_p = $id_p;
    }

    public function setCodeP($code_p)
    {
        $this->code_p = $code_p;
    }

    public function setAdresseP($adresse_p)
    {
        $this->adresse_p = $adresse_p;
    }

    public function setPaysP($pays_p)
    {
        $this->pays_p = $pays_p;
    }

    public function setTypeP($type_p)
    {
        $this->type_p = $type_p;
    }
}
