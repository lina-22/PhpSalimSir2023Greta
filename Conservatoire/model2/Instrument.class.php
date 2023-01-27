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

    /**
     * Get the value of reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of dateAchat
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set the value of dateAchat
     *
     * @return  self
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }
}
