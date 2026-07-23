<?php

// Chargement de la configuration de la base de données
require_once __DIR__ . '/../config/db.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - Admin Fin-Tech Ordis</title>

    <!-- Fichiers CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin-style.css">
</head>

<body>

    <!-- Conteneur global Flexbox -->
    <div class="d-flex">

        <!-- Barre latérale commune Admin -->
        <?php include __DIR__ . '/includes/sidebar.php'; ?>

        <!-- Zone de contenu principal du Dashboard -->
        <main class="flex-grow-1 p-4 bg-light min-vh-100">
            
        </main>

    </div>

    <!-- Fichiers JS (placés avant </body>) -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>