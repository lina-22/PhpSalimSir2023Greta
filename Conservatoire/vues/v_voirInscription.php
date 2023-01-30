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
        echo '  <a href="index.php?action=pdfInscription&numInscription= ' . $numero . '"> PDF -> <img src="../images/pdf-Img.png"/></a><br><br>';

        //echo  "<a  href="pageone.php"><img src="homelogo.jpg"  /></a>"
        //echo " <b><button> <a href="index.php?action=pdfInscription"> Suprimer </a> </button></b> <br>";

        echo " <br> <br>";
    }
    ?>
</div>