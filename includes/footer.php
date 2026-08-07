<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fichiers CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin-style.css">

    <!-- Fichiers JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
</head>

<body>
    <footer class="site-footer text-white ">
        <div class="container-footer">

            <!-- Zone Principale (Grille 4 colonnes) -->
            <div class="footer-grid">

                <!-- Colonne 1 : Marque & Réseaux -->
                <div class="footer-col footer-abstract">
                    <h4 class="footer-brand">
                        <span class="brand-white">Fin-Tech</span>
                        <span class="brand-blue"> Ordis</span>
                    </h4>
                    <p class="footer-desc">
                        Votre boutique en ligne spécialisée dans la vente d'ordinateurs et d'équipements techniques au Bénin.
                    </p>
                    <div class="d-flex align-items-center gap-2">
                        <a href="#" class="social-icon bg-facebook text-white"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-icon bg-instagram text-white"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-icon bg-linkedin text-white"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon bg-youtube text-white"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <div class="vertical-divider"></div>

                <!-- Colonne 2 : Contact -->
                <div class="footer-col footer-contact">
                    <h4 class="footer-title">CONTACTEZ-NOUS</h4>
                    <ul class="contact-list">
                        <li><i class="fa-solid fa-location-dot"></i> <span>Cotonou, Bénin</span></li>
                        <li><i class="fa-solid fa-phone"></i> <span>+229 01 50 90 42 95</span></li>
                        <li><i class="fa-solid fa-envelope"></i> <span>contact@fintechordis.bj</span></li>
                        <li><i class="fa-solid fa-clock"></i> <span>Lun - Sam: 08h - 18h</span></li>
                    </ul>
                </div>

                <div class="vertical-divider"></div>

                <!-- Colonne 3 : Liens Utiles -->
                <div class="footer-col footer-links">
                    <h4 class="footer-title">LIENS UTILES</h4>
                    <ul class="links-list">
                        <li><a href="catalogue.php">Catalogue</a></li>
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Comment commander ?</a></li>
                        <li><a href="#">Livraison & Paiement</a></li>
                        <li><a href="#">Politique de retour</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>

                <div class="vertical-divider"></div>

                <!-- Colonne 4 : Engagement & Admin -->
                <div class="footer-col footer-engagement">
                    <h4 class="footer-title">NOTRE ENGAGEMENT</h4>
                    <p class="engagement-text">
                        Nous nous engageons à vous offrir des produits de qualité, un accompagnement personnalisé et une expérience d'achat fiable et sécurisée.
                    </p>
                    <div class="admin-access">
                        <a href="admin/login.php" onclick="alert('Accès réservé aux administrateurs')">
                            <span>Accès Réservé</span>
                            <i class="fa-solid fa-lock"></i>
                        </a>
                    </div>
                </div>

            </div>

            <hr class="footer-separator">

            <!-- Zone Inférieure : Copyright & Legal -->
            <div class="footer-bottom">
                <p class="copyright">&copy; 2026 Fin-Tech Ordis. Tous droits réservés.</p>

                <ul class="legal-links">
                    <li><a href="#">Mentions légales</a></li>
                    <li class="separator">|</li>
                    <li><a href="#">Confidentialité</a></li>
                    <li class="separator">|</li>
                    <li class="legal-item-secure">
                        <a href="#">Conditions d'utilisation</a>
                        <a href="admin/login.php" class="text-warning" onclick="alert('Accès réservé aux administrateurs')"><i class="fa-solid fa-user-shield"></i></a>
                    </li>
                </ul>

            </div>

        </div>
    </footer>

    <!-- Widget Flottant (Indépendant du Footer) -->
    <div class="floating-widget-container">
        <div class="whatsapp-tooltip" id="whatsappTooltip">
            <span>Besoin d'aide ? <strong>Écrivez-nous</strong></span>
        </div>

        <a href="https://wa.me/2290150904295" target="_blank" class="btn-whatsapp" aria-label="Contacter sur WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
        </a>

        <a href="#" class="btn-back-to-top" aria-label="Retour en haut de page">
            <i class="fa-solid fa-chevron-up"></i>
        </a>
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>