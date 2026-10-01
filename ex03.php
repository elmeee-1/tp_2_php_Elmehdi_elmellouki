<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px 12px; }
    </style>
</head>
<body>
    <h1>Exercice 3</h1>

    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixUnitaireHt = 60;
    $quantite = 3;

    $totalHt = $prixUnitaireHt * $quantite;
    $montantTva = ($totalHt * TAUX_TVA) / 100;
    $totalTtc = $totalHt + $montantTva;
    $totalTtc += 15;
    ?>

    <table>
        <tr><th>Libellé</th><th>Valeur</th></tr>
        <tr><td>Total HT</td><td><?= $totalHt ?> <?= DEVISE ?></td></tr>
        <tr><td>TVA</td><td><?= $montantTva ?> <?= DEVISE ?></td></tr>
        <tr><td>Total TTC</td><td><?= $totalTtc - 15 ?> <?= DEVISE ?></td></tr>
        <tr><td>Frais de livraison</td><td>15 <?= DEVISE ?></td></tr>
        <tr><td>Montant final</td><td><?= $totalTtc ?> <?= DEVISE ?></td></tr>
    </table>

    <?php
    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA existe et vaut : " . TAUX_TVA . " %.</p>";
    }
    ?>
</body>
</html>
