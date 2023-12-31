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
        <h1>Exercice 9:</h1>
        <p>Enoncé: Tableau multidimensionnel</p>
    </header>
    <?php
        // Tableau multidimensionnel associatif
        $personne = array(
            "Personne1" => array("prenom" => "Malick", "ville" => "Dakar", "age" => 25),
            "Personne2" => array("prenom" => "Daiw", "ville" => "thies", "age" => 30),
            "Personne3" => array("prenom" => "Bassekou", "ville" => "Marseille", "age" => 22)
        );

        // Affichage du tableau
        print_r($personne);
    ?>

</body>
</html>