<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px 12px; }
    </style>
</head>
<body>
    <h1>Exercice 9</h1>

    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $total = 0;
    $nbValides = 0;
    $meilleureNote = 0;
    $meilleurEtudiant = "";
    ?>

    <table>
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Validé</th>
        </tr>

        <?php
        foreach ($notes as $etudiant => $note) {
            $total += $note;
            $validation = ($note >= 10) ? "Validé" : "Non validé";
            if ($note >= 10) {
                $nbValides++;
            }
            if ($note > $meilleureNote) {
                $meilleureNote = $note;
                $meilleurEtudiant = $etudiant;
            }

            echo "<tr><td>$etudiant</td><td>$note</td><td>$validation</td></tr>";
        }
        ?>
    </table>

    <?php
    $moyenne = $total / count($notes);
    echo "<p>Somme des notes : $total</p>";
    echo "<p>Moyenne de la classe : $moyenne</p>";
    echo "<p>Nombre d'étudiants validés : $nbValides</p>";
    echo "<p>Meilleure note : $meilleureNote attribuée à $meilleurEtudiant</p>";
    ?>
</body>
</html>
