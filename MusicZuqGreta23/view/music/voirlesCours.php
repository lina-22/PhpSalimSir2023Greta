<?php
$title = "voirLesCours";
ob_start(); ?>

<?php if (isset($_SESSION['erreur'])) {
    if (count($_SESSION['erreur']) > 0) {
        echo ("<div class='text-danger text-center list-unstyled my-3'>");
        foreach ($_SESSION['erreur'] as $msgErreur) {
            echo "<li>" . $msgErreur . "</li>";
        }
        echo ("</div>");
    }
} ?>

<!-- crop de la page start  -->

<div>
    <h3 style="width: 35rem; margin: 50PX 300PX 50PX 300PX;color:white;">Bienvenue Madame, Monsieur, Mademoiselle sur le site du conservatoire music pour tous</h3>
</div>
<div style="background-color:black;">
    <div class="first-choice" style="display: flex;">

        <div class="maincrop" style="margin: 20PX 20PX 20PX 20PX; width: 500px">
            <div class="card" style="width: 18rem;margin-left:15PX">

                <ul class="list-group list-group-flush">
                    <li>
                        <img class="d-block w-100" src="./public/images/catalogue/image1.png" alt="First slide" style="width: 18rem;">
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
                        <img class="d-block w-100" src="./public/images/catalogue/image2.png" alt="First slide" style="width: 18rem;">
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
                        <img class="d-block w-100" src="./public/images/catalogue/image3.png" alt="First slide" style="width: 18rem;">
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

<!-- pattern="^(? = .*[A-Z])(? = .*[a-z])(? = .*\d)(? = .*[-+!*$@%_])([-+!*$@%_\w]{8,15})$" -->
<?php $content = ob_get_clean();
require("view/template.php"); ?>