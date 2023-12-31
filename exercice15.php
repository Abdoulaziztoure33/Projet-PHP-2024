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
        <h1>Exercice 15:</h1>
        <p>Enoncé:  fonction dont le paramètre passé par référence est un tableau de 
        chaînes de caractères...</p>
    </header>
    <?php
        function transformeTableau(&$tableau) {
            foreach ($tableau as &$element) {
                $element = ucwords(strtolower($element));
            }
        }

        // utilisation de la fonction
        $donnees = array("exEmpLe", "MaJUSCULE", "minuscule");
        transformeTableau($donnees);

        // Affichage du tableau transformé
        print_r($donnees);
    ?>
</body>
</html>
