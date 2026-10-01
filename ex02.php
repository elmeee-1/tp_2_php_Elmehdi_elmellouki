<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>

    <?php
    $nom = "Dupont";
    $prenom = "Ali";
    $age = 20;
    $formation = "Programmation Web";

    $presentation = "Je m'appelle " . $prenom . " " . $nom . " et j'ai " . $age . " ans.";
    $presentation .= " J'apprends PHP.";

    echo "<p>$presentation</p>";

    $note = 12;
    $Note = 16;
    echo "<p>Note en minuscule : $note</p>";
    echo "<p>Note en majuscule : $Note</p>";
    ?>

    <p><strong>Note :</strong> PHP est sensible à la casse : <code>$note</code> et <code>$Note</code> sont des variables différentes.</p>
    <p>Noms valides : <code>$a</code>, <code>$_a</code>, <code>$a_a</code>, <code>$AAA</code>, <code>$a1</code>.</p>
    <p>Noms invalides : <code>$a!</code>, <code>$1a</code>.</p>
</body>
</html>
