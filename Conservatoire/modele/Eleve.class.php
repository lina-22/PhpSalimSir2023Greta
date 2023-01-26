<?php
class Eleve
{
    private $idEleve;
    private $nom;
    private $prenom;
    private $tel;
    private $adresserue;
    private $adressenum;


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


    public function getAdresserue()
    {
        return $this->adresserue;
    }

    public function setAdresserue($adresserue)
    {
        $this->adresserue = $adresserue;
        return $this;
    }

    public function setAdressenum($adressenum)
    {
        $this->adressenum = $adressenum;
        return $this;
    }
    public function getAddressenum()
    {
        return $this->adressenum;
    }
}
