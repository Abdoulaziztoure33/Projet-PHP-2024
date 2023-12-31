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
        <h1>exercice 18:</h1>
        <p>Enoncé:crivez une fonction de lecture de tableaux multidimensionnels. L'affichage se 
        fait sous forme de tableau XHTML dont les titres sont les clés des tableaux</p>
    </header>
    <?php
    // Boucle pour les lignes de 1 à 10
    for ($i = 1; $i <= 10; $i++) {
        // Boucle pour les chiffres de 1 à $i
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        // Nouvelle ligne après chaque itération 
        echo "<br>";
    }
?>

</body>
</html>