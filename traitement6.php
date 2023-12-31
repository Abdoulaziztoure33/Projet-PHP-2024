<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Récupérer la valeur entière du formulaire
    $entier = intval($_POST["entier"]);
    // Afficher les diviseurs de l'entier
    
    echo "Les diviseurs de $entier sont  ";
    for ($i = 1; $i <= $entier; $i++) {
        if ($entier % $i == 0) {
            echo ",$i";
        }
    }
?>

</body>
</html>