<?php

class SeanceDAO
{

    public static  function getLesSeances()
    {

        try {

            $cours = array();

            $req = "Select * from seance";

            $monPdoMusic = PdoMusic::getPdoMusic();

            $rs = $monPdoMusic::getMonPdo()->prepare($req);

            $rs->setFetchMode(PDO::FETCH_OBJ);

            $rs->execute();

            $cours = $rs->fetchAll();
            return $cours;
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }



    public function getSeance($unIdSeance)
    {

        require_once("modele/class.pdomusic.inc.php");

        require_once("Business/Seance.php");

        try {


            $req = "Select * from seance where idSeance = $unIdSeance";

            $monPdoMusic = PdoMusic::getPdoMusic();

            $rs = $monPdoMusic::getMonPdo()->prepare($req);

            $rs->setFetchMode(PDO::FETCH_OBJ);

            $rs->execute();

            $maSeance = $rs->fetch();

            $uneSeance = new Seance($maSeance->idSeance, $maSeance->dateSeance, $maSeance->idInstrument, $maSeance->idProf);
            return $uneSeance;
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }

    function creerInscription($num, $idAdherent)
    {


        try {

            require_once("modele/class.pdomusic.inc.php");

            $requete = "insert into inscrire(idCours,idEleve) values(" . htmlspecialchars($num) . "," . htmlspecialchars($idAdherent) . ")";

            echo $requete;

            $monPdoMusic = PdoMusic::getPdoMusic();
            $rs = $monPdoMusic::getMonPdo()->prepare($requete);
            $rs->execute();
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }
}
