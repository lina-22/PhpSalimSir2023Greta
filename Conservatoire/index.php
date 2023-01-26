<?php 


if(!isset($_REQUEST['action']))
{ $action = 'accueil';}
else
{ $action = $_REQUEST['action'];}

//if ($action != "pdfReservation") {
    include("vues/v_entete.php") ;
//}

switch ($action)
{
    
        case 'accueil':
           
            // Inclusion de l'en-t?te
       include("vues/v_accueil.php");
            
         
            
         break ;
            
                case 'voirCours' :
                    
  require_once ("modele/class.pdomusic.inc.php");
  require_once ("modele/SeanceDAO.php");

$lesCours = SeanceDAO::getLesSeances() ;

       
 include("vues/v_cours.php");
        
      break;
    
     case 'inscrire' :
  
         
        require_once ("modele/class.pdomusic.inc.php");

        $numero = $_REQUEST['numero'];
        
       
        include("vues/v_formulaireInscription.php");
         
       
       
        break;
    
    
     case 'validerInscription' :

      require_once ("modele/class.pdomusic.inc.php");
      require_once ("Business/Seance.php");     
     require_once ("modele/SeanceDAO.php");
      require_once ("Business/Adherent.php");
      require_once ("modele/AdherentDAO.php");
  
     $uneSeanceDAO = new SeanceDAO() ;
     
     $unAdherentDAO = new AdherentDAO() ;
     
  
$unIdSeance = $_REQUEST["numero"] ; 

$nom =  $_REQUEST["nom"];

$prenom = $_REQUEST["prenom"];

$tel =  $_REQUEST["tel"];
   
 // construire  un adhérent
   
  // ajouter cet adhérent dans la base
 
 
  // récupérer l'identifiant de l'adhérent
 // rajouter cet adhérent dans le cours correspondant


        
      include("vues/v_confirmeInscription.php");


       break ;
            
     
    
    case 'voirInscriptions' :
 
         
        break;
    
    
    case 'pdfInscription' :
 
         break ;

case 'suppInscription' :
    
      
        
        
        break;
    
    
}

include("vues/v_pied.php") ;
