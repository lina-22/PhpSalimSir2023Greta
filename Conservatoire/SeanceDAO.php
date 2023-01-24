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
}
