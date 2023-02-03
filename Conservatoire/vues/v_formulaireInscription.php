<div id="contenu">

    Nouvel Adhérent :
    <legend>Réservation du cours n° <?php echo $numero ?></legend>
    <div style="background-color:green; width: 1000px;text-align:center;">
        <form action=" index.php?action=validerInscription" method="post">

            <input type="hidden" name="numero" value=<?php echo $numero ?> />
            <fieldset>

                <p>
                    <label for='nom'>Nom *</label>
                    <input type="text" name="nom" value="" required /><br>
                </p>

                <p>
                    <label for='prenom'>Prénom *</label>
                    <input type="text" name="prenom" value="" required /><br>
                </p>

                <p>
                    <label for='tel'>Telephone *</label>
                    <input type="text" name="tel" value="" required /><br>
                </p>


                </br>
                <p>
                    <input type="submit" value="Valider" name="Valider" />
                    <input type="reset" value="Annuler" name="Annuler" />
                </p>
            </fieldset>
        </form>
    </div>
</div>