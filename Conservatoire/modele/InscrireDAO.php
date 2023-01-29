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
}
