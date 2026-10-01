<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>
    <h1>Traitement des données - GET</h1>

    <?php
    $champs = ['nom', 'prenom', 'groupe'];
    $erreurs = [];

    foreach ($champs as $champ) {
        if (!isset($_GET[$champ]) || trim((string) $_GET[$champ]) === '') {
            $erreurs[] = "Le champ '$champ' est requis.";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] !== 'GET' || empty($_GET)) {
        echo "<p>Aucun formulaire GET n'a été soumis. Ouvrez le formulaire dans ex10_get.html pour envoyer des données.</p>";
        exit;
    }

    if (!empty($erreurs)) {
        echo "<p>Erreur :</p><ul>";
        foreach ($erreurs as $erreur) {
            echo "<li>$erreur</li>";
        }
        echo "</ul>";
        exit;
    }

    $nom = htmlspecialchars(trim((string) $_GET['nom']), ENT_QUOTES, 'UTF-8');
    $prenom = htmlspecialchars(trim((string) $_GET['prenom']), ENT_QUOTES, 'UTF-8');
    $groupe = htmlspecialchars(trim((string) $_GET['groupe']), ENT_QUOTES, 'UTF-8');

    echo "<p>Bienvenue $prenom $nom, vous êtes dans le groupe $groupe.</p>";
    echo "<p>URL envoyée : " . htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') . "</p>";
    ?>
</body>
</html>
