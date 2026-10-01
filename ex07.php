<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice 7</h1>

    <h2>Table de multiplication</h2>
    <?php
    $nombre = 7;
    echo "<pre>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$nombre × $i = " . ($nombre * $i) . PHP_EOL;
    }
    echo "</pre>";
    ?>

    <h2>Pyramide</h2>
    <?php
    echo "<pre>";
    for ($ligne = 1; $ligne <= 6; $ligne++) {
        for ($etoile = 1; $etoile <= $ligne; $etoile++) {
            echo "*";
        }
        echo PHP_EOL;
    }
    echo "</pre>";
    ?>
</body>
</html>
