<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fichiers CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">


    <!-- Fichiers JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>

</head>

<body>
    <header class="site-header">
        <div class="container-header">
            <div class="header-content">

                <!-- Logo / Marque -->
                <div class="header-brand">
                    <a href="index.php" class="logo-link">
                        <span class="brand-white">Fin-Tech</span>
                        <span class="brand-blue"> Ordis</span>
                    </a>
                </div>

                <!-- Navigation Principale -->
                <nav class="header-nav" aria-label="Navigation principale">
                    <ul class="nav-list">
                        <li><a href="index.php" class="nav-link">Accueil</a></li>

                        <li class="nav-item-dropdown">
                            <!-- Bouton déclencheur du sous-menu -->
                            <button type="button" class="nav-link dropdown-toggle" aria-expanded="false">
                                <span>Catalogue</span>
                                <i class="fa-solid fa-chevron-down nav-icon"></i>
                            </button>

                            <!-- Sous-menu masqué par défaut -->
                            <ul class="dropdown-menu">
                                <li><a href="catalogue.php?cat=etudiant" class="dropdown-link">Étudiant</a></li>
                                <li><a href="catalogue.php?cat=professionnel" class="dropdown-link">Professionnel</a></li>
                                <li><a href="catalogue.php?cat=gamer" class="dropdown-link">Gamer</a></li>
                                <li><a href="catalogue.php?cat=bureautique" class="dropdown-link">Bureautique</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php" class="nav-link">Contact</a></li>
                    </ul>
                </nav>

                <!-- Action / Bouton Catalogue -->
                <div class="see-shop">
                    <a href="catalogue.php" class="btn-shop">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Voir le catalogue</span>
                    </a>
                </div>

            </div>
        </div>
    </header>

    <script src="assets/js/script.js"></script>
</body>

</html>