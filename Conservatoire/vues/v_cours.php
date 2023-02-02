<div id="contenu" style="display:inline-table;background-color:#ccff11; text-align:center;">
    <div>
        <h2>« voir Les Catalague de cours »</h2>
    </div>
    <table class="table table-striped" style="color: black;">
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

            foreach ($lesCours as $unCours) {
                $numero = $unCours->IdCours;
                $numero++;
            ?>
                <tr>
                    <td><?= $numero ?></td>
                    <td><?= $unCours->jour ?></td>
                    <td><?= $unCours->tranche ?></td>
                    <td><?= $unCours->IdCours ?></td>
                    <td><?= $unCours->numSeance ?></td>
                    <td><?= '<a href="index.php?action=inscrire&numero=' . $numero . '">inscrire</a>' ?></td>;
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>