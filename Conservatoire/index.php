<?php
if (!isset($_REQUEST['action'])) {
    $action = 'accueil';
} else {
    $action = $_REQUEST['action'];
}
require_once("modele/InscrireDAO.php");
require_once("modele/class.pdomusic.inc.php");
require_once("Business/Seance.php");
require_once("modele/SeanceDAO.php");
require_once("Business/Adherent.php");
require_once("modele/AdherentDAO.php");
//if ($action != "pdfReservation") {
include("vues/v_entete.php");
//}
switch ($action) {

    case 'accueil':
        // Inclusion de l'en-t?te
        include("vues/v_accueil.php");
        break;

    case 'voirCours':
        require_once("modele/class.pdomusic.inc.php");
        require_once("modele/SeanceDAO.php");
        $lesCours = SeanceDAO::getLesSeances();
        include("vues/v_cours.php");
        break;

    case 'inscrire':
        require_once("modele/class.pdomusic.inc.php");
        $numero = $_REQUEST['numero'];
        include("vues/v_formulaireInscription.php");
        break;


    case 'validerInscription':
        $adherentDAO = new AdherentDAO();
        $unIdSeance = $_REQUEST["numero"];
        $nom =  $_REQUEST["nom"];
        $prenom = $_REQUEST["prenom"];
        $tel =  $_REQUEST["tel"];
        $idCours = $_POST["numero"];
        // construire  un adhérent

        $adherent = new Adherent($nom, $prenom, $tel);
        $unAdherentDAO = new AdherentDAO();

        // ajouter cet adhérent dans la base
        $resultat = $unAdherentDAO->creerAdherent($adherent);
        $resultat = $unAdherentDAO->getAdherent($adherent);
        $inscrireDAO = new InscrireDAO();
        $inscrireDAO->ajouterEleveCours($idCours, $resultat->idEleve, "2023-01-29");
        include("vues/v_confirmeInscription.php");

        break;

    case 'voirInscriptions':

        // instrument et  inscrire table de base de donne jointure il faut faire
        //var_dump($inscrireDAO);
        require_once("modele/class.pdomusic.inc.php");
        require_once("modele/SeanceDAO.php");
        require_once("modele/InscrireDAO.php");
        // $lesCours = SeanceDAO::getLesSeances();
        $lesInscriptions = InscrireDAO::getLesInscriptions();
        //var_dump($lesInscriptions);
        include("vues/v_voirInscription.php");

        break;

    case 'pdfInscription':
        ob_start();

        require_once("fpdf/fpdf.php");
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, 'Hello World!');
        // $pdf->Output();
        $pdf->Output('D', 'filename.pdf');
        ob_end_flush();
        include("vues/v_voirInscription.php");

        //index.php?action=pdfInscription&numInscription=0
        break;

    case 'suppInscription':

        // $adherentDAO = new AdherentDAO();
        //$unIdSeance = $_REQUEST["numero"];
        $idCours = $_GET["idCours"];
        $IdEleve = $_GET["idEleve"];
        //var_dump($IdEleve);
        $inscrireDAO = new InscrireDAO();
        $resultat = $inscrireDAO->deleteInscrire($idCours, $IdEleve);

        //var_dump($resultat);
        header("location:index.php?action=voirInscriptions");
        break;


    case 'voirTableInscriptions':

        require_once("modele/class.pdomusic.inc.php");
        require_once("modele/SeanceDAO.php");
        require_once("modele/InscrireDAO.php");

        $lesInscriptions = InscrireDAO::getLesInscriptions();

        include("vues/v_table.php");

        break;
}

include("vues/v_pied.php");


// case "deleteCategorie":
//     $id = filter_var($_GET["idCategorie"], FILTER_SANITIZE_NUMBER_INT);
//     $objectCategorieManager = new CategorieManager($lePDO);
//     $objectCategorieManager->deleteCategorie($id);
//     header("location:./?path=adminCategorie&action=categories");
//     break;