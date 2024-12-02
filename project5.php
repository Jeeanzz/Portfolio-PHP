<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>

<?php

if (!$projects) {
    die("Le projet n'a pas été trouvé.");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($projects['name']); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($projects[4]['name']); ?></h1>
    </header>

    <section>
        <h2>Description</h2>
        <p><?php echo nl2br(htmlspecialchars($projects[4]['description'])); ?></p>
        <h2>Défis</h2>
        <p><?php echo nl2br(htmlspecialchars($projects[4]['challenges'])); ?></p>
        <h2>Solutions</h2>
        <p><?php echo nl2br(htmlspecialchars($projects[4]['solutions'])); ?></p>
        <h2>Résultats</h2>
        <p><?php echo nl2br(htmlspecialchars($projects[4]['results'])); ?></p>
        <img src="<?php echo htmlspecialchars($projects[4]['image_path']); ?>" alt="Image projet">
    </section>

    <footer>
        <p>&copy; 2024 Portfolio DevSecOps - Tous droits réservés</p>
    </footer>
</body>
</html>