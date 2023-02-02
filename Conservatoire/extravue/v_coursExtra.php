<div id="contenu" style="display:inline-table;">
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

<!-- ************************************** until same as prof -->

<div id="contenu" style="display:inline-table;background-color: black;">
    <div>
        <h2>« voir Les Catalague de cours »</h2>
    </div>

    <table class="table table-striped" style="color: white;">
        <thead>
            <tr>
                <th scope="col">Cours</th>
                <th scope="col">la date du cours</th>
                <th scope="col">la tranche</th>
                <th scope="col">le professeur</th>
                <th scope="col">la Seance</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $numero = $unCours->IdCours;
            foreach ($lesCours as $unCours) {
                $nb++;
                $numero++;
                //@todo afficher les lignes
            ?>
                <tr>
                    <td><?= $numero ?></td>
                    <td><?= $unCours->jour ?></td>
                    <td><?= $unCours->tranche ?></td>
                    <td><?= $unCours->IdCours ?></td>
                    <td><?= $unCours->numSeance ?></td>


                    <td><?= '  <a href="index.php?action=inscrire&numero=' . $numero . '">inscrire</a>' ?></td>;

                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>

</div>