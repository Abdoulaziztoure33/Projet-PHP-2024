<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Données du Client</h1>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $adresse = htmlspecialchars($_POST["adresse"]);
        $ville = htmlspecialchars($_POST["ville"]);
        $code_postal = htmlspecialchars($_POST["code_postal"]);

        echo "<table border='1'>";
        echo "<tr><td><strong>Nom</strong></td><td>$nom</td></tr>";
        echo "<tr><td><strong>Prénom</strong></td><td>$prenom</td></tr>";
        echo "<tr><td><strong>Adresse</strong></td><td>$adresse</td></tr>";
        echo "<tr><td><strong>Ville</strong></td><td>$ville</td></tr>";
        echo "<tr><td><strong>Code Postal</strong></td><td>$code_postal</td></tr>";
        echo "</table>";
    }
?>

</body>
</html>
