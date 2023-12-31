<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Exercice 7:</h1>
        <p>Enoncé: programme qui teste si un nombre saisi au clavier est parfait. 
        NB : Un nombre égal à la somme de ses diviseurs propres est parfait.</p>
    </header>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération de la valeur entière du formulaire
        $entier = intval($_POST["entier"]);
    
        // Initialisation de la somme des diviseurs à 0
        $sommeDiviseurs = 0;
    
        // Parcourir les diviseurs potentiels de 1 à $entier/2
        for ($i = 1; $i <= $entier / 2; $i++) {
            // Vérification $i est un diviseur de $entier
            if ($entier % $i == 0) {
                // Ajout le diviseur à la somme
                $sommeDiviseurs += $i;
            }
        }
    
        // Vérification de la somme des diviseurs est égale à $entier
        if ($sommeDiviseurs == $entier) {
            echo "Le nombre $entier est un nombre parfait.";
        } else {
            echo "Le nombre $entier n'est pas un nombre parfait.";
        }
    }
   
    
    ?>

</body>
</html>