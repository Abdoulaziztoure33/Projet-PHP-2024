<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];

        switch ($action) {
            case "Vendre":
                header("Location: vendre.php");
                break;

            case "Acheter":
                header("Location: acheter.php");
                break;

            case "Louer":
                header("Location: louer.php");
                break;

            default:
                // Redirection par défaut si l'action n'est pas reconnue
                header("Location: index.php");
                break;
        }
    }
}

?>
