<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>
    <h1>Exercice 8</h1>

    <?php
    echo "<h2>Partie 1 : nombres pairs de 0 à 20</h2>";
    $i = 0;
    echo "Résultat : ";
    while ($i <= 20) {
        if ($i % 2 == 0) {
            echo ($i == 10) ? "<strong>10</strong>" : $i;
            if ($i < 20) {
                echo ", ";
            }
        }
        $i++;
    }

    echo "<h2>Partie 2 : while vs do-while</h2>";
    $compteur = 5;
    $executionWhile = 0;
    while ($compteur < 5) {
        $executionWhile++;
        $compteur++;
    }

    $compteur = 5;
    $executionDoWhile = 0;
    do {
        $executionDoWhile++;
        $compteur++;
    } while ($compteur < 5);

    echo "<p>while : $executionWhile exécution(s)</p>";
    echo "<p>do-while : $executionDoWhile exécution(s)</p>";

    echo "<h2>Partie 3 : continue et break</h2>";
    echo "Résultat : ";
    for ($j = 1; $j <= 20; $j++) {
        if ($j % 3 == 0) {
            continue;
        }
        if ($j >= 16) {
            break;
        }
        echo $j . " ";
    }
    ?>
</body>
</html>
