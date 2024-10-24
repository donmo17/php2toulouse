<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LIRE_COOKIE</title>
        <link rel="stylesheet" href="./css/cookie.css">
    </head>

    <body>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

            // Récupération le nom du cookie passé dans le formulaire
            $nomCookie = $_POST['nom_cookie'];

            // Vérifier si le cookie existe
            if (isset($_COOKIE[$nomCookie])) {

                // Récupérer la valeur du cookie
                $valeurCookie = $_COOKIE[$nomCookie];

                // Affichage du cookie
                echo "<p>La valeur du cookie est $valeurCookie.</p>";
            } else
            // cookie inexistant
            {
                echo "<p>Le cookie n'existe pas.</p>";
            }
        }
        ?>

        <h1>Lire un cookie en PHP</h1>
        <form method="post">
            <label for="nom">Nom du cookie :</label>
            <input type="text" name="nom_cookie" id="nom" value="">
            <input type="submit" name="submit" value="Lire le cookie">
        </form>
    </body>

</html>
</body>
