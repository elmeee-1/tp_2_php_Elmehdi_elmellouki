<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>

    <?php
    $val1 = 42;
    $val2 = "42";
    $val3 = 15.8;
    $val4 = true;
    $val5 = false;
    $val6 = null;
    ?>

    <pre>
    <?php
    var_dump($val1, $val2, $val3, $val4, $val5, $val6);
    ?>
    </pre>

    <?php
    $convertStringToInt = (int) "42";
    $convertFloatToInt = (int) 15.8;
    $convertIntToString = (string) 42;
    ?>

    <p>Conversion de "42" en entier : <?= $convertStringToInt ?> (type : <?= gettype($convertStringToInt) ?>)</p>
    <p>Conversion de 15.8 en entier : <?= $convertFloatToInt ?> (type : <?= gettype($convertFloatToInt) ?>)</p>
    <p>Conversion de 42 en chaîne : <?= $convertIntToString ?> (type : <?= gettype($convertIntToString) ?>)</p>

    <p>echo true : <?php echo true; ?></p>
    <p>echo false : <?php echo false; ?></p>
    <p>var_dump(true) : <?php var_dump(true); ?></p>
    <p>var_dump(false) : <?php var_dump(false); ?></p>

    <?php
    $b1 = (bool) 0;
    $b2 = (bool) "0";
    $b3 = (bool) "PHP";
    $b4 = (bool) [];
    ?>

    <pre>
    <?php
    var_dump($b1, $b2, $b3, $b4);
    ?>
    </pre>
</body>
</html>
