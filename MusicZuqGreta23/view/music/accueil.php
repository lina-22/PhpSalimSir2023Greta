<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site Conservatoire</title>
  <!-- CSS -->
  <link rel="stylesheet" href="public/css/style.css">
</head>

<body style="background-color: black;">

  <?php
  $title = "Music : Connexion";
  ob_start(); ?>
  <?php if (isset($_SESSION['erreur'])) {

    echo ("<div class='text-danger text-center list-unstyled my-3'>");
    foreach ($_SESSION['erreur'] as $msgErreur) {
      echo "<li>" . $msgErreur . "</li>";
    }
    echo ("</div>");
    unset($_SESSION['erreur']);
  } ?>

  <div style="background-color: black;">
    <div>
      <h1 style="width:20rem; margin: 50PX 450PX 50PX 400PX; color:white;">Site Conservatoire</h1>
    </div>
    <!-- image settings -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="width: 35rem; margin: 50PX 300PX 50PX 300PX;">
          <img class="d-block w-100" src="./public/images/firstImg.jpeg" alt="First slide" style="width: 18rem;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./public/images/secondImg.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./public/images/thirdImg.jpeg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./public/images/fourthImg.jpeg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <button style="width: 35rem; margin: 50PX 300PX 50PX 300PX;">
      <a href="./?path=main&action=formLogin" class="btn btn-secondary">Connexion</a>
  </div>

  </button>
  <!-- image settings end -->

  <div>
    <h3 style="width: 35rem; margin: 50PX 300PX 50PX 300PX;color:white;">Bienvenue Madame, Monsieur, Mademoiselle sur le site du conservatoire music pour tous</h3>
  </div>
  <!-- une menu setting start -->
  <div style="width: 5rem; margin: 50PX 300PX 50PX 300PX;">
    <div class="navbar-nav mr-auto">
      <div class="btn-group" class="navbar-nav mr-auto">

        <!-- ******** -->
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ACCUEIL
        </button>
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <a style="color:white;" href="./?path=main&action=voirlesCours">
            VOIR LE CATALAGUE DES COURS</a>
        </button>
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          VOIR LES INSCRIPTION
        </button>

        <!-- ************ -->
      </div>
    </div>
  </div>
  <!-- une menu setting end -->
  <!-- crop de la page start  -->
  <div style="background-color:black;">
    <div class="first-choice" style="display: flex;">

      <div class="maincrop" style="margin: 20PX 20PX 20PX 20PX; width: 500px">
        <div class="card" style="width: 18rem;margin-left:15PX">

          <ul class="list-group list-group-flush">
            <li>
              <img class="d-block w-100" src="./public/images/firstImg.jpeg" alt="First slide" style="width: 18rem;">
            </li>
            <li class="list-group-item">Course 1</li>
            <li class="list-group-item">La Date de Cours: lundi 17H</li>
            <li class="list-group-item">La matière</li>
            <li class="list-group-item">Le professeur</li>
            <li class="list-group-item">
              <a class="list-group-item" href="./?path=main&action=formInscription">Inscription</a>
            </li>
          </ul>

        </div>
      </div>

      <div class="maincrop" style="margin: 20PX 20PX 20PX 20PX; width: 500px;">
        <div class="card" style="width: 18rem; margin-left:60PX">

          <ul class="list-group list-group-flush">
            <li>
              <img class="d-block w-100" src="./public/images/firstImg.jpeg" alt="First slide" style="width: 18rem;">
            </li>
            <li class="list-group-item">Course 1</li>
            <li class="list-group-item">La Date de Cours: lundi 17H</li>
            <li class="list-group-item">La matière</li>
            <li class="list-group-item">Le professeur</li>
            <li class="list-group-item">
              <a class="list-group-item" href="./?path=main&action=formInscription">Inscription</a>
            </li>
          </ul>

        </div>
      </div>

      <div class="maincrop" style="margin: 20PX 20PX 20PX 100PX; width: 500px;">
        <div class="card" style="width: 18rem;">

          <ul class="list-group list-group-flush">
            <li>
              <img class="d-block w-100" src="./public/images/firstImg.jpeg" alt="First slide" style="width: 18rem;">
            </li>
            <li class="list-group-item">Course 1</li>
            <li class="list-group-item">La Date de Cours: lundi 17H</li>
            <li class="list-group-item">La matière</li>
            <li class="list-group-item">Le professeur</li>
            <li class="list-group-item">
              <a class="list-group-item" href="./?path=main&action=formInscription">Inscription</a>
            </li>
          </ul>

        </div>
      </div>

    </div>

    <div class="second-choice " style="background-color: brown; display: flex;">

      <div class="maincrop" style="margin: 20PX 20PX 20PX 20PX; width: 500px">
        <div class="card" style="width: 18rem;margin-left:15PX">

          <ul class="list-group list-group-flush">
            <li>
              <img class="d-block w-100" src="./public/images/firstImg.jpeg" alt="First slide" style="width: 18rem;">
            </li>
            <li class="list-group-item">Course 1</li>
            <li class="list-group-item">La Date de Cours: lundi 17H</li>
            <li class="list-group-item">La matière</li>
            <li class="list-group-item">Le professeur</li>
            <li class="list-group-item">
              <a class="list-group-item" href="./?path=main&action=formInscription">Inscription</a>
            </li>
          </ul>

        </div>
      </div>

      <div class="maincrop" style="margin: 20PX 20PX 20PX 20PX; width: 500px;">
        <div class="card" style="width: 18rem; margin-left:60PX">

          <ul class="list-group list-group-flush">
            <li>
              <img class="d-block w-100" src="./public/images/firstImg.jpeg" alt="First slide" style="width: 18rem;">
            </li>
            <li class="list-group-item">Course 1</li>
            <li class="list-group-item">La Date de Cours: lundi 17H</li>
            <li class="list-group-item">La matière</li>
            <li class="list-group-item">Le professeur</li>
            <li class="list-group-item">
              <a class="list-group-item" href="./?path=main&action=formInscription">Inscription</a>
            </li>
          </ul>

        </div>
      </div>

      <div class="maincrop" style="margin: 20PX 20PX 20PX 100PX; width: 500px;">
        <div class="card" style="width: 18rem;">

          <ul class="list-group list-group-flush">
            <li>
              <img class="d-block w-100" src="./public/images/firstImg.jpeg" alt="First slide" style="width: 18rem;">
            </li>
            <li class="list-group-item">Course 1</li>
            <li class="list-group-item">La Date de Cours: lundi 17H</li>
            <li class="list-group-item">La matière</li>
            <li class="list-group-item">Le professeur</li>
            <li class="list-group-item">
              <a class="list-group-item" href="./?path=main&action=formInscription">Inscription</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
  </div>
  <?php $content = ob_get_clean();
  require("view/template.php"); ?>

</body>

</html>