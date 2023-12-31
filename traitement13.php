<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats</title>
</head>
<body>

<h1>Résultats du Calcul</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prix_ht = isset($_POST['prix_ht']) ? floatval($_POST['prix_ht']) : 0;
    $taux_tva = isset($_POST['taux_tva']) ? floatval($_POST['taux_tva']) : 0;

    // Calcul de la TVA et du prix TTC
    $tva = $prix_ht * ($taux_tva / 100);
    $prix_ttc = $prix_ht + $tva;

    // Affichage des résultats
    echo "<label for='tva'>Montant de la TVA :</label>";
    echo "<input type='text' name='tva' id='tva' value='$tva' readonly><br>";

    echo "<label for='prix_ttc'>Prix TTC :</label>";
    echo "<input type='text' name='prix_ttc' id='prix_ttc' value='$prix_ttc' readonly><br>";
}
?>

</body>
</html>
