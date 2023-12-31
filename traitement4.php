<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Exercice 4:</h1>
        <p>Enoncé:programme qui permet de calculer le PPCM de deux entiers saisis au 
        clavier. </p>
    </header>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifie si les clés "valeur1" et "valeur2" existent dans $_POST
        if (isset($_POST["valeur1"]) && isset($_POST["valeur2"])) {
            // Récupère les valeurs
            $valeur1 = intval($_POST["valeur1"]);
            $valeur2 = intval($_POST["valeur2"]);

            // Calcul du PPCM
            $a = $valeur1;
            $b = $valeur2;
            
            // Calcul du PGCD
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }

            // Calcul du PPCM
            $ppcm = abs($valeur1 * $valeur2) / $a;

            // Affichage du résultat
            echo "<h2>Résultat :</h2>";
            echo "<p>Le PPCM de $valeur1 et $valeur2 est : $ppcm</p>";
        } else {
            echo "<p>Les clés 'valeur1' et 'valeur2' n'ont pas été définies dans le formulaire.</p>";
        }
    }
    ?>

</body>
</html>