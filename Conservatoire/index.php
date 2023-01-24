<?php
if (!isset($_REQUEST['action'])) {
    $action = 'accueil';
} else {
    $action = $_REQUEST['action'];
}

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



        break;


    case 'validerInscription':



        break;



    case 'voirInscriptions':


        break;


    case 'pdfInscription':

        break;

    case 'suppInscription':




        break;
}

include("vues/v_pied.php");
