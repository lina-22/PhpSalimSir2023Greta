<div id="contenu">
<?php
foreach($lesCours as $unCours)
{
	$numero = $unCours->IdCours ;
        echo "Cours <b>$numero</b> <br>";
       
        echo "la date du cours : ".$unCours->JOUR." <br>";
        echo "la tranche ".$unCours->TRANCHE."</br>";
       echo "le professeur ".$unCours->ID."</br>";
       echo "la Seance ".$unCours->NUMSEANCE."</br>";

   echo '  <a href="index.php?action=inscrire&numero='. $numero .'">inscrire</a><br><br>';
        
 
}
?>
</div>