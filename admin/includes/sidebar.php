<?php
// Permet de détecter la page actuelle pour mettre en surbrillance le bon lien
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fichiers CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/admin-style.css">
</head>

<body>

    <div class="sidebar">
        <div class="head-side">
            <h2>
                <span class="brand-white">Fin-Tech</span>
                <span class="brand-blue">Ordis</span>
            </h2>
            <p>Admin</p>
        </div>

        <div class="main-side">
            <ul>
                <li><a href="dashboard.php"
                        class="<?= ($currentPage == 'dashboard.php') ? 'active btn btn-primary' : '' ?> text-white"><i
                            class="fa-solid fa-house" aria-hidden="true"></i> Dashboard</a></li>
                <li><a href="crud_produits.php"
                        class="<?= ($currentPage == 'crud_produits.php') ? 'active btn btn-primary' : '' ?> text-white"><i
                            class="fa-solid fa-box-archive" aria-hidden="true"></i> Produits</a></li>
                <li><a href="clients_crm.php"
                        class="<?= ($currentPage == 'clients_crm.php') ? 'active btn btn-primary' : '' ?> text-white"><i
                            class="fa-solid fa-users" aria-hidden="true"></i> Clients CRM</a></li>
                <li><a href="messagerie.php"
                        class="<?= ($currentPage == 'messagerie.php') ? 'active btn btn-primary' : '' ?> text-white"><i
                            class="fa-solid fa-envelope" aria-hidden="true"></i> Messagerie</a></li>
                <li><a href="moderation.php"
                        class="<?= ($currentPage == 'moderation.php') ? 'active btn btn-primary' : '' ?> text-white"><i
                            class="fa-solid fa-flag" aria-hidden="true"></i> Moderation</a></li>
                <li><a href="parametre.php"
                        class="<?= ($currentPage == 'parametre.php') ? 'active btn btn-primary' : '' ?> text-white"><i
                            class="fa-solid fa-gear" aria-hidden="true"></i> Paramètres</a></li>
                <li><a href="deconnexion.php"
                        class="<?= ($currentPage == 'deconnexion.php') ? 'active' : '' ?> btn btn-danger"><i
                            class="fa-solid fa-right-from-bracket" aria-hidden="true"></i> Déconnexion</a></li>
            </ul>
        </div>

        <!-- BAS DE LA SIDEBAR DYNAMIQUE -->
        <div class="foot-side">
            <?php if ($currentPage === 'deconnexion.php') : ?>
                <!-- BLOC DÉCONNEXION : Widget Profil Admin -->
                <div class="log-out">

                    <div class="user-icon">
                        <i class="fa-solid fa-user" aria-hidden="true"></i>
                    </div>
                    <h2 class="text-white support-title">Admin Fin-Tech</h2>
                    <p class="support-text">Administrateur</p>
                </div>

            <?php else : ?>
                <!-- BLOC PAR DÉFAUT (Dashboard, Produits, etc.) : Widget Besoin d\'aide -->
                <div class=" support-help">
                    <div class="support-icon">
                        <i class="fa-solid fa-headset" aria-hidden="true"></i>
                    </div>
                    <h2 class="text-white support-title">Besoin d'aide ?</h2>
                    <p class="support-text">Notre équipe support est disponible pour vous accompagner.</p>
                    <a href="#" class="btn btn-primary">Contactez le support</a>
                </div>
            <?php endif; ?>
        </div>

        <div class="text-center text-white mt-3 text-muted">
            <p>&copy; 2026 Fin-Tech Ordis Admin.</p>
        </div>
    </div>



    <!-- Fichiers JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>