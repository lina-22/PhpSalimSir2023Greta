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
}
