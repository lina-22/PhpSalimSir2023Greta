<?php
class ProfDAO
{
    public static  function getLesInfoProf()
    {

        try {
            $lesinfo = array();
            $req = "SELECT pro.idProf, pro.nom, pro.prenom, sea.numSeance, sea.jour, sea.tranche
                    FROM professeur AS pro
                    INNER JOIN seance As sea
                    ON pro.idProf = sea.idProf";

            $monPdoMusic = PdoMusic::getPdoMusic();

            $rs = $monPdoMusic::getMonPdo()->prepare($req);

            $rs->setFetchMode(PDO::FETCH_OBJ);

            $rs->execute();

            $lesinfo = $rs->fetchAll();
            //var_dump($lesinfo);
            return $lesinfo;
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }


    public static function annulerCours($numSeance, $jour)
    {
        try {
            var_dump($numSeance, $jour);
            $req = "DELETE FROM seance WHERE numSeance=:numSeance and jour= :jour";
            $monPdoMusic = PdoMusic::getPdoMusic();
            $rs = $monPdoMusic::getMonPdo()->prepare($req);
            $rs->bindValue(":numSeance", $numSeance);
            $rs->bindValue(":jour", $jour);
            $resultat = $rs->execute();
            return $resultat;
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }
}
