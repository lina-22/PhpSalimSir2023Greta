<?php

class AdherentDAO
{


    public function creerAdherent(Adherent $adherent)
    {




        try {


            $req = "insert into eleve(nom,prenom,tel) values(:nom,:prenom,:tel)";



            $monPdoMusic = PdoMusic::getPdoMusic();


            $rs = $monPdoMusic::getMonPdo()->prepare($req);
            $rs->bindValue(":nom", $adherent->getNom());
            $rs->bindValue(":prenom", $adherent->getPrenom());
            $rs->bindValue(":tel", $adherent->getTel());
            $resultat = $rs->execute();
            return $resultat;
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }


    public function getAdherent(Adherent $adherent)
    {


        try {



            $req = "SELECT idEleve from eleve where NOM = :nom and PRENOM = :prenom and TEL = :tel  ";


            $monPdoMusic = PdoMusic::getPdoMusic();


            $rs = $monPdoMusic::getMonPdo()->prepare($req);
            $rs->bindValue(":nom", $adherent->getNom());
            $rs->bindValue(":prenom", $adherent->getPrenom());
            $rs->bindValue(":tel", $adherent->getTel());
            $rs->execute();
            $resultat = $rs->fetch(PDO::FETCH_OBJ);

            return $resultat;
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }
}
