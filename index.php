<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- EXERCICE 1 -->

    <!-- <form action="./user.php" method="get">

        <label for="nom">Nom :</label>
        <input type="text" name = "nom">

        <label for="prenom">Prénom :</label>
        <input type="text" name = "prenom">

        <button type="submit">ENVOYER</button>

    </form> -->


    <!-- EXERCICE 2 -->

    <!-- <form action="./user.php" method="post">

        <label for="nom">Nom :</label>
        <input type="text" name = "nom">

        <label for="prenom">Prénom :</label>
        <input type="text" name = "prenom">

        <button type="submit">ENVOYER</button>

    </form> -->


    <!-- EXERCICE 5 -->

    <!-- <form action="./user.php" method="get">

        <label for="civilite">Civilité :</label>
        <select name="civilite">
            <option value="un homme">Homme</option>
            <option value="une femme">Femme</option>
        </select>

        <label for="nom">Nom :</label>
        <input type="text" name="nom">

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom">

        <button type="submit">ENVOYER</button>

    </form> -->


    <!-- EXERCICE 6 -->


    <!-- <?php
    if ( 
        isset($_GET['civilite']) && $_GET['civilite'] !== '' //Test de la civilité
        && isset($_GET['nom']) && $_GET['nom'] !== '' //Test du nom
        && isset($_GET['prenom']) && $_GET['prenom'] !== '' // Test du prénom
    ) {
        echo "Bonjour " . $_GET['civilite'] . " " . $_GET['prenom'] . " " . $_GET['nom'] . ".";
    } else {
    ?>
        <form action='./index.php' method='get'>

            <label for='civilite'>Civilité :</label>
            <select name='civilite'>
                <option value='Mr'>Homme</option>
                <option value='Mme'>Femme</option>
            </select>

            <label for='nom'>Nom :</label>
            <input type='text' name='nom'>

            <label for='prenom'>Prénom :</label>
            <input type='text' name='prenom'>

            <button type='submit'>ENVOYER</button>

        </form> <?php
            }
                ?> -->




    <!-- EXERCICE 7

    <?php
    if ( 
        isset($_GET['civilite']) && $_GET['civilite'] !== '' //Test de la civilité
        && isset($_GET['nom']) && $_GET['nom'] !== '' //Test du nom
        && isset($_GET['prenom']) && $_GET['prenom'] !== '' // Test du prénom
        && isset($_GET['fichier']) && $_GET['fichier'] !== '' // Test du prénom
    ) {
        echo "Bonjour " . $_GET['civilite'] . " " . $_GET['prenom'] . " " . $_GET['nom'].". Vous avez envoyé : ".$_GET['fichier'].".";
    } else {
    ?>
        <form action='./index.php' method='get'>

            <label for='civilite'>Civilité :</label>
            <select name='civilite'>
                <option value='Mr'>Homme</option>
                <option value='Mme'>Femme</option>
            </select>

            <label for='nom'>Nom :</label>
            <input type='text' name='nom'>

            <label for='prenom'>Prénom :</label>
            <input type='text' name='prenom'>

            <input type="file" name="fichier">

            <button type='submit'>ENVOYER</button>

        </form> <?php
            }
                ?> -->


    <!-- EXERCICE 8 -->

    <?php
    if ( 
        isset($_GET['civilite']) && $_GET['civilite'] !== '' //Test de la civilité
        && isset($_GET['nom']) && $_GET['nom'] !== '' //Test du nom
        && isset($_GET['prenom']) && $_GET['prenom'] !== '' // Test du prénom
        && isset($_GET['fichier']) && $_GET['fichier'] !== '' // Test du prénom
    ) {
        echo "Bonjour " . $_GET['civilite'] . " " . $_GET['prenom'] . " " . $_GET['nom'].". Vous avez envoyé : ".$_GET['fichier'].".";
    } else {
    ?>
        <form action='./index.php' method='get'>

            <label for='civilite'>Civilité :</label>
            <select name='civilite'>
                <option value='Mr'>Homme</option>
                <option value='Mme'>Femme</option>
            </select>

            <label for='nom'>Nom :</label>
            <input type='text' name='nom'>

            <label for='prenom'>Prénom :</label>
            <input type='text' name='prenom'>

            <input type="file" name="fichier">

            <button type='submit'>ENVOYER</button>

        </form> <?php
            }
                ?>


</body>

</html>