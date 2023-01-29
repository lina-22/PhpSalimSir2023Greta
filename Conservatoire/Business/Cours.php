<?php

class Cours
{

    private $idCours;
    private $IdEleve;
    private $dateInscription;




    public function __construct($unIdCours, $unIdEleve, $unDateInscription)
    {


        $this->idCours = $unIdCours;
        $this->IdEleve = $unIdEleve;
        $this->dateInscription = $unDateInscription;
    }

    /**
     * Get the value of idCours
     */
    public function getIdCours()
    {
        return $this->idCours;
    }

    /**
     * Set the value of idCours
     *
     * @return  self
     */
    public function setIdCours($idCours)
    {
        $this->idCours = $idCours;

        return $this;
    }

    /**
     * Get the value of IdEleve
     */
    public function getIdEleve()
    {
        return $this->IdEleve;
    }

    /**
     * Set the value of IdEleve
     *
     * @return  self
     */
    public function setIdEleve($IdEleve)
    {
        $this->IdEleve = $IdEleve;

        return $this;
    }

    /**
     * Get the value of dateInscription
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     *
     * @return  self
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }
}
