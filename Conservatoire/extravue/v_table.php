<?php

$title = "Voir les inscription";

ob_start(); ?>
<div class="container">
  <h1>Inscription</h1>
  <h2><?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];

        unset($_SESSION['msg']);
      }
      ?></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Numero</th>
        <th scope="col">idCour</th>

        <th scope="col">Nom Eleve</th>
        <th scope="col">Prenom Eleve</th>
        <th scope="col">Pdf</th>
        <th scope="col">Suprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nb = 0;
      foreach ($lesInscriptions as $unInscriptions)
        $nb++; {
        //@todo afficher les lignes
      ?>
        <tr>

          <th scope="row"><?= ". $nb ."  ?></th>
          <td><?= $unInscriptions->idCours ?></td>

          <td><?= $unInscriptions->nom  ?></td>
          <td><?= $unInscriptions->prenom ?></td>

          <td class="d-flex">
            <a href="index.php?action=pdfInscription&numInscription= ' . $numero . '"> PDF -> <img src="../images/pdf.png" /></a>
            <form action="?path=admin&action=supprimerArticle" class="d-flex" method="post">
              <!-- <input type="hidden" name="token"> -->
              <button class="btn btn-danger mx-2">Supprimer</button>
            </form>
          </td>
        </tr>

      <?php
      }
      ?>
    </tbody>
  </table>
  <br>
</div>
<?php

$content = ob_get_clean();

//require("view/template.php");
?>