<?php
class Eleve
{
    private $id;
    private $nom;
    private $prenom;
    private $tel;
    private $mail;
    private $adresse;


    /**
     * Get the value of idEleve
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of idEleve
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getPreNom()
    {
        return $this->prenom;
    }

    public function setPreNom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
        return $this;
    }


    public function getMail()
    {
        return $this->mail;
    }

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
