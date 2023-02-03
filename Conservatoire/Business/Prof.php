<?php
class Prof
{
    private $idPrdof;
    private $refInstrument;
    private $nom;
    private $prenom;
    private $tel;
    private $mail;
    private $adresse;

    public function __construct($idPrdof, $refInstrument, $nom, $prenom, $mail, $adresse)
    {

        $this->idPrdof = $idPrdof;
        $this->refInstrument = $refInstrument;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->adresse = $$adresse;
    }

    /**
     * Get the value of idPrdof
     */
    public function getIdPrdof()
    {
        return $this->idPrdof;
    }

    /**
     * Set the value of idPrdof
     *
     * @return  self
     */
    public function setIdPrdof($idPrdof)
    {
        $this->idPrdof = $idPrdof;

        return $this;
    }

    /**
     * Get the value of refInstrument
     */
    public function getRefInstrument()
    {
        return $this->refInstrument;
    }

    /**
     * Set the value of refInstrument
     *
     * @return  self
     */
    public function setRefInstrument($refInstrument)
    {
        $this->refInstrument = $refInstrument;

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

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
}
