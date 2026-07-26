<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fichiers CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin-style.css">

    <!-- Fichiers JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header class="top-header">
        <div class="header-container">

            <!-- Partie Gauche : Toggle Menu & Titre Dynamique -->
            <div class="header-left">
                <button type="button" class="sidebar-toggle-btn" aria-label="Menu principal">
                    <i class="fa-solid fa-bars" aria-hidden="true"></i>
                </button>

                <?php if ($currentPage === 'dashboard.php') : ?>
                    <h1 class="header-title">Tableau de bord</h1>
                <?php elseif ($currentPage === 'crud_produits.php') : ?>
                    <h1 class="header-title">Gestion des Produits</h1>
                <?php elseif ($currentPage === 'clients_crm.php') : ?>
                    <h1 class="header-title">Base Clients / CRM</h1>
                <?php elseif ($currentPage === 'messagerie.php') : ?>
                    <h1 class="header-title">Messagerie</h1>
                <?php elseif ($currentPage === 'moderation.php') : ?>
                    <h1 class="header-title">Modération des avis</h1>
                <?php endif; ?>
            </div>

            <!-- Partie Centre : Barre de Recherche -->
            <?php if ($currentPage !== 'deconnexion.php' && $currentPage !== 'parametre.php') : ?>
                <div class="header-center">
                    <form action="#" method="GET" role="search" class="search-form">
                        <input
                            type="search"
                            name="query"
                            class="search-input"
                            placeholder="Rechercher (produits, clients, commandes...)"
                            aria-label="Rechercher">

                        <button type="submit" class="search-btn" aria-label="Lancer la recherche">
                            <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            <?php endif; ?>

            <!-- Partie Droite : Notifications & Profil Utilisateur -->
            <div class="header-right">

                <!-- Bouton Notification avec Badge -->
                <div class="notification-wrapper">
                    <a href="messagerie.php" class="header-icon-btn" aria-label="Notifications (3 non lues)">
                        <i class="fa-regular fa-bell" aria-hidden="true"></i>
                        <span class="notification-badge">3</span>
                    </a>
                </div>

                <!-- Profil Utilisateur -->
                <div class="user-profile">
                    <div class="user-icon">
                        <i class="fa-solid fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="user-info">
                        <span class="user-name">Admin</span>
                        <span class="user-role">Administrateur</span>
                    </div>
                </div>

            </div>

        </div>
    </header>
</body>

</html>