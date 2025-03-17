<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <h1>Bienvenue, <?php echo $_SESSION['user']['username']; ?>!</h1>
    <a href="logout.php">Déconnexion</a>
</body>
</html>
