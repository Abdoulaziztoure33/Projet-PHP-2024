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
        <H1>Exercice 8:</H1>
        <p>Enoncé: Tableau multidimensionnel associatif</p>
    </header>
    <?php
    // Tableau multidimensionnel associatif
        $personne = array(
            "Personne1" => array("prenom" => "Sali", "ville" => "dakar", "age" => 25),
            "Personne2" => array("prenom" => "Mariame", "ville" => "thies", "age" => 30),
            "Personne3" => array("prenom" => "Mohammad", "ville" => "kedougou", "age" => 22)
        );

        // Affichage du tableau
        print_r($personne);
    ?>

</body>
</html>