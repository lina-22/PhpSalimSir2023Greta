<?php

class AdherentDAO
{


    public function creerAdherent($unAdherent)
    {

        require_once("modele/class.pdomusic.inc.php");


        try {


            $req = "insert into eleve(id,nom,prenom,tel) values(null,'" . htmlspecialchars($unAdherent->getNom()) . "','" . htmlspecialchars($unAdherent->getPrenom()) . "','" . htmlspecialchars($unAdherent->getTel()) . "')";


            $monPdoMusic = PdoMusic::getPdoMusic();


            $rs = $monPdoMusic::getMonPdo()->prepare($req);


            $rs->execute();
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }


    public function getIdAdherent($unAdherent)
    {

        require_once("modele/class.pdomusic.inc.php");

        require_once("Business/Adherent.php");

        try {

            $nom =    $unAdherent->getNom();
            $prenom =    $unAdherent->getPrenom();
            $tel =    $unAdherent->getTel();

            $req = "SELECT id from eleve where NOM = '$nom' and PRENOM = '$prenom' and TEL = '$tel'  ";

            echo $req;

            $monPdoMusic = PdoMusic::getPdoMusic();

            $rs = $monPdoMusic::getMonPdo()->prepare($req);

            $rs->setFetchMode(PDO::FETCH_OBJ);

            $rs->execute();

            $monAdherent = $rs->fetch();


            return $monAdherent->id;
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }

    public function getAdherent($unIdAdherent)
    {

        require_once("modele/class.pdomusic.inc.php");

        require_once("Business/Adherent.php");

        try {



            $req = "SELECT nomAdherent, prenomAdherent,telAdherent from Adherent where idAdherent = $unIdAdherent";

            echo $req;

            $monPdoMusic = PdoMusic::getPdoMusic();

            $rs = $monPdoMusic::getMonPdo()->prepare($req);

            $rs->setFetchMode(PDO::FETCH_OBJ);

            $rs->execute();

            $monAdherent = $rs->fetch();


            return $monAdherent;
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }
}
