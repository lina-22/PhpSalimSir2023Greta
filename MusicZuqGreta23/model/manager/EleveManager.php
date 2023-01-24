<?php
class EleveManager
{

    private $lePDO;

    public function __construct($unPDO)
    {
        $this->lePDO = $unPDO;
    }

    public function fetchELeveByEmailAndMdp($email, $hashMdp)
    {
        try {

            // private $idEleve;
            // private $nom;
            // private $prenom;
            // private $tel;
            // private $adresserue;
            // private $adressenum;

            $connex = $this->lePDO;
            $sql = $connex->prepare("SELECT * FROM eleve where email=:email and mdp=:mdp");

            $sql->bindParam(":email", $email);
            $sql->bindParam(":mdp", $hashMdp);
            $sql->execute();

            $sql->setFetchMode(PDO::FETCH_CLASS, "Eleve");
            $resultat = $sql->fetch();
            return $resultat;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
