<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Exercice 10:</h1>
        <p>Enoncé: Utilisez une boucle foreach pour lire les tableaux des exercices 8 et 9</p>
    </header>
    <?php
    $personnes = array(
        "Alice" => array("prenom" => "Ali", "ville" => "Paris", "age" => 30),
        "Bob" => array("prenom" => "Diaw", "ville" => "Dakar", "age" => 25),
        "Charlie" => array("prenom" => "Camara", "ville" => "Thies", "age" => 22)
    );

    // Affichage du tableau
    print_r($personnes);
    ?>

</body>
</html>