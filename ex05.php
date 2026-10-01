<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5</h1>

    <?php
    $tests = [-1, 9, 10, 12, 14, 16, 21];

    foreach ($tests as $moyenne) {
        if ($moyenne < 0 || $moyenne > 20) {
            echo "<p>Valeur testée : $moyenne => Note invalide</p>";
            continue;
        }

        if ($moyenne < 10) {
            $message = "Non validé";
        } elseif ($moyenne < 12) {
            $message = "Passable";
        } elseif ($moyenne < 14) {
            $message = "Assez bien";
        } elseif ($moyenne < 16) {
            $message = "Bien";
        } else {
            $message = "Très bien";
        }

        echo "<p>Valeur testée : $moyenne => $message</p>";
    }
    ?>
</body>
</html>
