<?php
class Professeur
{
    private $idProfesseur;
    private $idInstrument;
    private $nom;
    private $prenom;
    private $adresserue;
    private $adressenum;
    private $cp;

    public function getIdProfesseur()
    {
        return $this->idProfesseur;
    }

    public function setIdProfesseur($idProfesseur)
    {
        $this->idProfesseur = $idProfesseur;
        return $this;
    }

    /**
     * Get the value of idInstrument
     */
    public function getIdInstrument()
    {
        return $this->idInstrument;
    }

    /**
     * Set the value of idInstrument
     *
     * @return  self
     */
    public function setIdInstrument($idInstrument)
    {
        $this->idInstrument = $idInstrument;

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
     * Get the value of adresserue
     */
    public function getAdresserue()
    {
        return $this->adresserue;
    }

    /**
     * Set the value of adresserue
     *
     * @return  self
     */
    public function setAdresserue($adresserue)
    {
        $this->adresserue = $adresserue;

        return $this;
    }

    /**
     * Get the value of adressenum
     */
    public function getAdressenum()
    {
        return $this->adressenum;
    }

    /**
     * Set the value of adressenum
     *
     * @return  self
     */
    public function setAdressenum($adressenum)
    {
        $this->adressenum = $adressenum;

        return $this;
    }

    /**
     * Get the value of cp
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set the value of cp
     *
     * @return  self
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }
}
