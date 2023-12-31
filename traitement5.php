<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Exercice 5:</h1>
        <p>Enoncé: programme qui calcule le diamètre, le périmètre et la surface d’un 
        cercle dont le rayon est saisi au clavier. </p>
    </header>
    <?php
        // Récupérer la valeur entière du formulaire
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rayon=intval($_POST["Rayon"]);
            $surface= 3.14 * pow($rayon,2);
            $perimetre= 2 * 3.14 * $rayon;
            $diametre=2 * $rayon;
                echo"Concernant un cercle de rayon, $rayon. Son diametre est de ,
                 $diametre, son perimetre de ,
                 $perimetre, et sa surface est de , 
                 $surface.";
        } else{
            echo"Erreur";
        }
    ?>
</body>
</html>