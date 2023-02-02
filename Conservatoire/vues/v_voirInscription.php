<div id="contenu" style="display:inline-table;background-color: white;text-align:center;">
    <div style=" text-align:center;">
        <h2>« voirInscriptions »</h2>
    </div>

    <table class="table table-striped" style="color: black;">
        <thead>
            <tr>
                <th scope="col">No:insc</th>
                <th scope="col">idCour</th>
                <th scope="col">idEleve</th>
                <th scope="col">Nom Eleve</th>
                <th scope="col">Prenom Eleve</th>
                <th scope="col">Tel Eleve</th>
                <th scope="col">dateInscription</th>
                <th scope="col">PDF</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $nb = 0;
            $numero = 0;
            foreach ($lesInscriptions as $unInscriptions) {
                $nb++;
                $numero++;
                //@todo afficher les lignes
            ?>
                <tr>
                    <td><?= $nb  ?></td>
                    <td><?= $unInscriptions->idCours ?></td>
                    <td><?= $unInscriptions->IdEleve ?></td>
                    <td><?= $unInscriptions->nom  ?></td>
                    <td><?= $unInscriptions->prenom ?></td>
                    <td><?= $unInscriptions->tel  ?></td>
                    <td><?= $unInscriptions->dateInscription ?></td>
                    <td><a href="index.php?action=pdfInscription&numInscription=<?= $numero ?>"><img src="images/pdf.png" style="width: 30px"></a></td>
                    <td> <a href="index.php?action=suppInscription&idCours=<?= $unInscriptions->idCours ?>& idEleve=<?= $unInscriptions->IdEleve ?>"> <img src=" images/supprimer-icone.png"></a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>

</div>