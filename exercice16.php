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
        <h1>Exercice 16:</h1>
        <p>Enoncé: À partir de la fonction sinus de PHP, écrivez une fonction qui donne le sinus 
        d’un angle donné en radian, en degré ou en grade</p>
    </header>
    <?php
        function sinusAngle($mesure, $unite = 'radian') {
            // Convertir l'angle en radians
            switch (strtolower($unite)) {
                case 'degre':
                    $angle_en_radian = deg2rad($mesure);
                    break;
                case 'grade':
                    $angle_en_radian = deg2rad($mesure * 9 / 10);
                    break;
                default:
                    $angle_en_radian = $mesure;
                    break;
            }

            // Calculer et retourner le sinus de l'angle en radians
            return sin($angle_en_radian);
        }

        // utilisation de la fonction
        $angle_radian = 1.047; 
        $angle_degre = 60;
        $angle_grade = 66.67;

        echo "Sinus en radian : " . sinusAngle($angle_radian) . "<br>";
        echo "Sinus en degré : " . sinusAngle($angle_degre, 'degre') . "<br>";
        echo "Sinus en grade : " . sinusAngle($angle_grade, 'grade') . "<br>";
    ?>
</body>
</html>
