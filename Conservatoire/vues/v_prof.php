<div id="contenu" style="display:inline-table;background-color:#abf7b1; text-align:center;">
    <div>
        <h2>« voir Les Info de Prof »</h2>
    </div>
    <table class="table table-striped" style="color: black;">
        <thead>
            <!-- pro.idProf, pro.nom, pro.prenom, sea.numSeance, sea.jour, sea.tranche -->
            <tr>
                <th scope="col">IdProf</th>
                <th scope="col">ImageProf</th>
                <th scope="col">NomProf</th>
                <th scope="col">PrenomProf</th>
                <th scope="col">NumSeance</th>
                <th scope="col">JourSeance</th>
                <th scope="col">Tranche</th>
                <th scope="col">AnnulerCours</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($lesInfoProf as $unInfoProf) {
                //$numero = $unCours->IdCours;
                // $numero++;
            ?>
                <tr>
                    <td><?= $unInfoProf->idProf ?></td>
                    <td><img src="images/prof.jpeg" style="width: 30px; text-align:center;"></a></td>
                    <td><?= $unInfoProf->nom ?></td>
                    <td><?= $unInfoProf->prenom ?></td>
                    <td><?= $unInfoProf->numSeance ?></td>
                    <td><?= $unInfoProf->jour ?></td>
                    <td><?= $unInfoProf->tranche ?></td>
                    <td> <a href="index.php?action=annulerCours&numSeance=<?= $unInfoProf->numSeance ?>&jour=<?= $unInfoProf->jour ?>"> <img src=" images/supprimer-icone.png"></a>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>