<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Exercice 17:</h1>
        <p>Enoncé:  fonction de lecture de tableaux multidimensionnels. L'affichage se 
        fait sous forme de tableau XHTML dont les titres sont les clés des tableaux.</p>
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
        foreach ($tableau as $valeur) {
            echo '<tr>';
            foreach ($valeur as $element) {
                echo '<td>' . htmlspecialchars($element) . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';
        
        echo '</table>';
    }

    //'utilisation avec un tableau multidimensionnel
    $personnes = array(
        array('Nom' => 'Doe', 'Prénom' => 'John', 'Âge' => 25),
        array('Nom' => 'Ndiaye', 'Prénom' => 'Jane', 'Âge' => 30),
        array('Nom' => 'Mbourou', 'Prénom' => 'Bob', 'Âge' => 22)
    );

    afficherTableauXHTML($personnes);

    ?>

</body>
</html>