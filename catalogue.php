<?php
    require_once __DIR__ . '/config/db.php'; // Charge la config si ce n'est pas déjà fait
?>
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin-Tech Ordis Catalogue</title>

    <!-- Fichiers CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Fichiers JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
</head>

<body>
    <!-- Header / Barre de navigation -->
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Contenu Principal -->

    <!-- Footer / Pied de page -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>