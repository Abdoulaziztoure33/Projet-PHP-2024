<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Exercice 3:</h1>
        <p>Enoncé: Choisissez un nombre de trois chiffres.</p>
    </header>
<?php

    function afficherTableauXHTML($tableau) {
        echo '<table border="1">';
        
        // En-tête du tableau avec les clés comme titres
        echo '<thead>';
        echo '<tr>';
        foreach ($tableau as $cle => $valeur) {
            echo '<th>' . htmlspecialchars($cle) . '</th>';
        }
        echo '</tr>';
        echo '</thead>';

        // Corps du tableau avec les valeurs
        echo '<tbody>';
        foreach ($tableau as $ligne) {
            echo '<tr>';
            foreach ($ligne as $valeur) {
                echo '<td>' . htmlspecialchars($valeur) . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';
        
        echo '</table>';
    }
    
    //utilisation avec un tableau multidimensionnel
    $donnees = array(
        array('Nom' => 'Doe', 'Prénom' => 'John', 'Âge' => 25),
        array('Nom' => 'Smith', 'Prénom' => 'Jane', 'Âge' => 30),
        array('Nom' => 'Johnson', 'Prénom' => 'Bob', 'Âge' => 22)
    );

    afficherTableauXHTML($donnees);

?>

</body>
</html>