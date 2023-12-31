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
        <h1>Exercice 3:</h1>
        <p>Enoncé: Choisissez un nombre de trois chiffres.</p>
    </header>
    <?php

        // Choisissez un nombre de trois chiffres
        $nombreInitial = rand(100, 999);

        // Initialisation du compteur de coups
        $nombreDeCoups = 0;

        echo "Nombre initial : $nombreInitial\n";

        // Utilisation d'une boucle while
        $nombreTire = null;
        while ($nombreTire !== $nombreInitial) {
            $nombreTire = rand(100, 999);
            $nombreDeCoups++;
        }

        echo "Avec while : $nombreDeCoups coups nécessaires pour obtenir le nombre initial.\n";

        // Réinitialisation du compteur de coups
        $nombreDeCoups = 0;

        // Utilisation d'une boucle for
        for ($nombreTire = null; $nombreTire !== $nombreInitial; $nombreTire = rand(100, 999)) {
            $nombreDeCoups++;
        }

        echo "Avec for : $nombreDeCoups coups nécessaires pour obtenir le nombre initial.\n";

    ?>


</body>
</html>