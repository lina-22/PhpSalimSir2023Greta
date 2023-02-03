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
        $resultat = $unAdherentDAO->creerAdherent($adherent);
        $resultat = $unAdherentDAO->getAdherent($adherent);
        $inscrireDAO = new InscrireDAO();
        $inscrireDAO->ajouterEleveCours($idCours, $resultat->idEleve, "2023-02-02");
        // $inscrireDAO->ajouterEleveCours($idCours, $resultat->idEleve, date(DD - MM - YYYY));
        include("vues/v_confirmeInscription.php");

        break;

    case 'voirInscriptions':
        require_once("modele/class.pdomusic.inc.php");
        require_once("modele/SeanceDAO.php");
        require_once("modele/InscrireDAO.php");
        $lesInscriptions = InscrireDAO::getLesInscriptions();
        //var_dump($lesInscriptions);
        include("vues/v_voirInscription.php");

        break;



    case 'voirProf':
        require_once("modele/class.pdomusic.inc.php");
        require_once("modele/ProfDAO.php");
        require_once("modele/InscrireDAO.php");
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
        //include("vues/v_voirInscription.php");
        break;

    case 'suppInscription':
        $idCours = $_GET["idCours"];
        $IdEleve = $_GET["idEleve"];
        //var_dump($IdEleve);
        $inscrireDAO = new InscrireDAO();
        $resultat = $inscrireDAO->deleteInscrire($idCours, $IdEleve);
        //var_dump($resultat);
        header("location:index.php?action=voirInscriptions");
        break;


    case 'voirInfoProf':

        require_once("modele/class.pdomusic.inc.php");
        require_once("modele/ProfDAO.php");
        //require_once("modele/SeanceDAO.php");
        $lesInfoProf = ProfDAO::getLesInfoProf();
        //var_dump($lesInfoProf);
        include("vues/v_prof.php");
        break;


    case 'annulerCours':
        require_once("modele/class.pdomusic.inc.php");
        require_once("modele/ProfDAO.php");
        $numSeance = $_GET["numSeance"];
        $jour = $_GET["jour"];
        //var_dump($jour);
        $lesInfoProf = ProfDAO::annulerCours($numSeance, $jour);
        // $profDAO = new ProfDAO();
        //$resultat = $profDAO->annulerCours($numSeance, $jour);
        //var_dump($resultat);
        header("location:index.php?action=voirInfoProf");
        break;



    case 'prof22':

        include("vues/v_profCoursDetails.php");
        break;
}




include("vues/v_pied.php");
