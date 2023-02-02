<div id="contenu" style="display:inline-table;">
    <div>
        <h3>« voirInscriptions »</h3>
    </div>
    <?php
    $nb = 0;
    $numero = 0;
    foreach ($lesInscriptions as $unInscriptions) {
        $nb++;
        echo "Numero d'inscription:  " . $nb . " <br>";
        echo " <b>***************</b> <br>";
        echo "idCour est:  " . $unInscriptions->idCours . " <br>";
        echo "idEleve:  " . $unInscriptions->IdEleve . " <br>";
        echo "Nom Eleve est:  " . $unInscriptions->nom . " <br>";
        echo "Prenom Eleve est:  " . $unInscriptions->prenom . "</br>";
        echo "Tel Eleve est:  " . $unInscriptions->tel . "</br>";
        echo "dateInscription est:  " . $unInscriptions->dateInscription . "</br>";

        echo " <b>*****************</b> <br>";

        echo " <b>*****************</b> <br>";
        $numero++;
        echo '  <a href="index.php?action=pdfInscription&numInscription= ' . $numero . '"> PDF -> <img src="../images/pdf.png"/></a><br><br>';
        echo ' <button> <a href="index.php?action=suppInscription&numInscription= ' . $numero . '"> Suprimmer</a></button><br><br>';
        //echo ' <button> <a href="index.php?action=suppInscription&numInscription= ' " . $unInscriptions->dateInscription .  '"> Suprimmer</a></button><br><br>';
        echo " <br> <br>";
    }
    ?>
</div>




<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Client Nom</th>
            <th scope="col">Client PreNom</th>
            <th scope="col">Client Email</th>
            <th scope="col">Ville</th>
            <th scope="col">Date de Commande</th>
            <th scope="col">Date de Livraison</th>
            <th scope="col">Article</th>
            <th scope="col">Est disponible</th>
            <th scope="col">Etat</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($lesInscriptions as $unInscriptions) {
            //@todo afficher les lignes
        ?>
            <tr>
                <td><?= $unInscriptions->idCours ?></td>
                <td><?= $unInscriptions->IdEleve ?></td>
                <td><?= $unInscriptions->nom  ?></td>
                <td><?= $unInscriptions->prenom ?></td>
                <td><?= $unInscriptions->tel  ?></td>
                <td><?= $unInscriptions->dateInscription ?></td>

                <td>
                    <button>Confirmer</button>
                    <button>Annuler</button>
                </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>