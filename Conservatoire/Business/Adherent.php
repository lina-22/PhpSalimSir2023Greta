<?php

class Adherent
{

    private $idAdherent;
    private $nomAdherent;
    private $prenomAdherent;
    private $telAdherent;



    public function __construct($unNomAdherent, $unPrenomAdherent, $unTelAdherent)
    {


        $this->nomAdherent = $unNomAdherent;
        $this->prenomAdherent = $unPrenomAdherent;
        $this->telAdherent = $unTelAdherent;
    }

    public function getIdAdherent()
    {

        return ($this->idAdherent);
    }

    public function getNom()
    {

        return ($this->nomAdherent);
    }


    public function getPrenom()
    {

        return ($this->prenomAdherent);
    }

    public function getTel()
    {

        return ($this->telAdherent);
    }
}
