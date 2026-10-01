<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement POST</title>
</head>
<body>
    <h1>Traitement des données - POST</h1>

    <?php
    $champs = ['nom', 'prenom', 'groupe'];
    $erreurs = [];

    foreach ($champs as $champ) {
        if (!isset($_POST[$champ]) || trim((string) $_POST[$champ]) === '') {
            $erreurs[] = "Le champ '$champ' est requis.";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST)) {
        echo "<p>Aucun formulaire POST n'a été soumis. Ouvrez le formulaire dans ex10_post.html pour envoyer des données.</p>";
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

    $nom = htmlspecialchars(trim((string) $_POST['nom']), ENT_QUOTES, 'UTF-8');
    $prenom = htmlspecialchars(trim((string) $_POST['prenom']), ENT_QUOTES, 'UTF-8');
    $groupe = htmlspecialchars(trim((string) $_POST['groupe']), ENT_QUOTES, 'UTF-8');

    echo "<p>Bienvenue $prenom $nom, vous êtes dans le groupe $groupe.</p>";
    echo "<p>URL envoyée : " . htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') . "</p>";
    ?>
</body>
</html>
