<?php

class InscrireDAO
{

    static function  ajouterEleveCours($idCours, $IdEleve, $dateInscription)
    {

        $sql = PdoMusic::getMonPdo()->prepare("INSERT INTO `inscrire`(`idCours`, `IdEleve`, `dateInscription`) VALUES (:IDCOURS,:IDELEVE,:DATEINSCRIPTION)");
        $sql->bindValue(":IDCOURS", $idCours);
        $sql->bindValue(":IDELEVE", $IdEleve);
        $sql->bindValue(":DATEINSCRIPTION", $dateInscription);
        $resultat = $sql->execute();
        return $resultat;
    }




    //public static  function getLesSeances()
    public static  function getLesInscriptions()
    {

        try {
            $inscrires = array();

            //$req = "Select * from inscrire";
            $req = "SELECT ele.nom, ele.prenom, ele.tel, ins.idCours,ins.IdEleve,ins.dateInscription
            FROM eleve as ele
            INNER JOIN inscrire as ins
            ON ele.idEleve = ins.IdEleve;";

            $monPdoMusic = PdoMusic::getPdoMusic();

            $rs = $monPdoMusic::getMonPdo()->prepare($req);

            $rs->setFetchMode(PDO::FETCH_OBJ);

            $rs->execute();

            $inscrires = $rs->fetchAll();
            return $inscrires;
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }


    public function deleteInscrire($idCours, $IdEleve)
    {
        try {
            var_dump($idCours, $IdEleve);
            $req = "DELETE FROM inscrire WHERE idCours=:idCours and IdEleve= :idEleve";
            $monPdoMusic = PdoMusic::getPdoMusic();
            $rs = $monPdoMusic::getMonPdo()->prepare($req);
            $rs->bindValue(":idCours", $idCours);
            $rs->bindValue(":idEleve", $IdEleve);
            $resultat = $rs->execute();
            return $resultat;
        } catch (PDOException $e) {

            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }
}

// public function deleteCategorie($id){
//     try {
//         $connex=$this->lePDO;
//         $sql =$connex->prepare("DELETE FROM categorie WHERE idCategorie=:idCategorie");
//         $sql->bindParam(":idCategorie",$id);
//         $sql->execute();
//         var_dump("here...");
//         return true;

//     } catch (PDOException $error) {
//         echo $error->getMessage();
//         return false;
//     } 
// }