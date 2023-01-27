<div id="contenu">
    <?php
    foreach ($lesCours as $unCours) {

        $numero = $unCours->IdCours;
        echo "Cours <b>$numero</b> <br>";
        echo "la date du cours : " . $unCours->jour . " <br>";
        echo "la tranche " . $unCours->tranche . "</br>";
        echo "le professeur " . $unCours->IdCours . "</br>";
        // var_dump($unCours);
        echo "la Seance " . $unCours->numSeance . "</br>";

        echo '  <a href="index.php?action=inscrire&numero=' . $numero . '">inscrire</a><br><br>';
    }
    ?>
</div>