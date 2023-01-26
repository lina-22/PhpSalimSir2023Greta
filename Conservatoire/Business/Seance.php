<?php

class Seance
{

    private $idSeance;
    private $dateSeance;
    private $idInstrument;
    private $idProf;
    private $listAdherents;


    public function __construct($unIdSeance, $uneDateSeance, $unIdInstrument, $unIdProf)
    {

        $this->idSeance = $unIdSeance;
        $this->dateSeance = $uneDateSeance;
        $this->idInstrument = $unIdInstrument;
        $this->idProf = $unIdProf;
        $this->listAdherents = array();
    }


    public function ajouterAdherent($unAdherent)
    {

        array_push($this->listAdherents, $unAdherent);
    }
}
