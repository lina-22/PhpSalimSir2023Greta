<?php

class Adherent
{
    private $idEleve;
    private $nom;
    private $prenom;
    private $tel;

    function __construct($nom, $prenom, $tel)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
    }

    /**
     * Get the value of idEleve
     */
    public function getIdEleve()
    {
        return $this->idEleve;
    }

    /**
     * Set the value of idEleve
     *
     * @return  self
     */
    public function setIdEleve($idEleve)
    {
        $this->idEleve = $idEleve;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
}
