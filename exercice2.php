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
        <h1>Exercice 2:</h1>
        <p>Expression conditionnelle pour tester si un nombre est à la fois un multiplede 3 et de 5.</p>
    </header>
    <?php
        $nombre= 9;
        if($nombre % 3 == 0 && $nombre % 5 == 0){
            echo "$nombre, est un multiple de 3 et de 5. ";
        }else{
            echo"$nombre, n'est pas un multiple de 3 et 5.";
        }
    ?>
</body>
</html>