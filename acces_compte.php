<?php
include_once("header.php");
?>

        <div id="form">

            <div id="titre">Accedez à votre compte dès maintenant !</div>

            <form method="post" action="control_connexion.php" style="padding:5%">

                <label class="label" for="nom">Nom</label></br>
                <input class="champ" id="nom" type="text" name="nom"></br>


                <label class="label" for="prenom">Prénom</label></br>
                <input class="champ" id="prenom" type="text" name="prenom"></br>

                <label class="label" for="souvenir">Se souvenir de moi</label>
                <input id="souvenir" type="checkbox" name="souvenir"></br>

                <input id="submit" type="submit" />

            </form>
        </div>
    </body>
<?php
include_once("footer.php");
?>