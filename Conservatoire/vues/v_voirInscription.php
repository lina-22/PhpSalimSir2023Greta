<div id="contenu" style="display:inline-table;">
    <?php
    foreach ($lesCours as $unCours) {

        $numero = $unCours->IdCours;
        //echo "Cours <b>$numero</b> <br>";

        echo " <b>***************</b> <br>";
        echo "la date du cours : " . $unCours->jour . " <br>";
        echo "la tranche " . $unCours->tranche . "</br>";
        //echo "le professeur " . $unCours->IdCours . "</br>";
        // var_dump($unCours);
        echo " <b>*****************</b> <br>";
        echo " <br> <br>";
    }
    ?>
</div>
<!-- $idCours, $IdEleve, $dateInscription -->