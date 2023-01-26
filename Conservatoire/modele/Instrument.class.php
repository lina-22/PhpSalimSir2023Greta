<?php
class Instrument
{
    private $idInstrument;
    private $nom;
    private $reference;
    private $dateAchat;

    public function getIdInstrument()
    {
        return $this->idInstrument;
    }

    public function setIdInstrument($idInstrument)
    {
        $this->idInstrument = $idInstrument;
        return $this;
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
}
