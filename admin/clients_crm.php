<?php
$currentPage = basename($_SERVER['PHP_SELF']);
// 2. Chargement de la configuration de la base de données
require_once __DIR__ . '/../config/db.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin Fin-Tech Ordis</title>

    <!-- Fichiers CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin-style.css">
    <link rel="stylesheet" href="../assets/css/style_of_M4.css">
</head>

<body>

    <!-- Conteneur global Flexbox -->
    <div class="d-flex">

        <!-- Barre latérale commune Admin -->
        <?php include __DIR__ . '/includes/sidebar.php'; ?>

        <!-- 2. Zone de droite : Conteneur vertical (Header + Contenu principal) -->
        <div class="main-wrapper flex-grow-1 d-flex flex-column">

            <!-- Header en haut de la zone de droite -->
            <?php include __DIR__ . '/includes/header_admin.php'; ?>

            <!-- Zone de contenu principal en dessous du header -->
            <main class="flex-grow-1 p-4 bg-light">
                <!-- Cartes de statistiques -->
                <div class="row g-3 mb-4">
                    <!-- Total clients -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card border-0 h-100">
                            <div class="card-body">
                                <div class="stat-icon tot_clients mb-3">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <p class="text-muted small fw-500 mb-2">Total clients</p>
                                <h2 class="h3 fw-bold mb-2">2 486</h2>
                                <small class="text-success fw-bold"><i class="fa-solid fa-arrow-trend-up me-1"></i>+12 ce mois</small>
                            </div>
                        </div>
                    </div>

                    <!-- Total devis téléchargés -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card border-0 h-100">
                            <div class="card-body">
                                <div class="stat-icon devis_downloads mb-3">
                                    <i class="fa-solid fa-download"></i>
                                </div>
                                <p class="text-muted small fw-500 mb-2">Total devis téléchargés</p>
                                <h2 class="h3 fw-bold mb-2">1 257</h2>
                                <small class="text-success fw-bold"><i class="fa-solid fa-arrow-trend-up me-1"></i>+18% ce mois</small>
                            </div>
                        </div>
                    </div>

                    <!-- Commentaires reçus -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card border-0 h-100">
                            <div class="card-body">
                                <div class="stat-icon avis_recu mb-3">
                                    <i class="fa-solid fa-comment-dots"></i>
                                </div>
                                <p class="text-muted small fw-500 mb-2">Commentaires reçus</p>
                                <h2 class="h3 fw-bold mb-2">892</h2>
                                <small class="text-success fw-bold"><i class="fa-solid fa-arrow-trend-up me-1"></i>+7.4% ce mois</small>
                            </div>
                        </div>
                    </div>

                    <!-- Prospects chauds -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card border-0 h-100">
                            <div class="card-body">
                                <div class="stat-icon prospect mb-3">
                                    <i class="fa-solid fa-fire"></i>
                                </div>
                                <p class="text-muted small fw-500 mb-2">Prospects chauds</p>
                                <h2 class="h3 fw-bold mb-2">213</h2>
                                <small class="text-success fw-bold"><i class="fa-solid fa-arrow-trend-up me-1"></i>+9 ce mois</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-3">
                    <!-- Colonne gauche -->
                    <div class="col-lg-8">
                        <!-- Liste des clients -->
                        <div class="card border-0 mb-3">
                            <div class="card-header bg-white border-0 py-3">
                                <h2 class="h5 m-0">Liste des clients</h2>

                                <div class="d-flex align-items-center gap-2">

                                    <!-- Bouton Filtres -->
                                    <button type="button" class="btn btn-outline-secondary btn-sm bg-white text-muted border d-flex align-items-center gap-2 px-3 py-1 shadow-sm">
                                        <i class="fa-solid fa-sliders text-muted small"></i>
                                        <span class="small fw-medium">Filtres</span>
                                    </button>

                                    <!-- Select Origine -->
                                    <form action="" id="Tt_ori" class="m-0">
                                        <select name="origine" id="origine" class="form-select form-select-sm text-muted border shadow-sm small py-1" style="max-width: 170px;">
                                            <option value="Toutes origines">Toutes origines</option>
                                            <option value="Messagerie">Messagerie</option>
                                            <option value="Demande de devis">Demande de devis</option>
                                            <option value="Commentaires">Commentaires</option>
                                        </select>
                                    </form>

                                    <!-- Champ de recherche avec icône loupe -->
                                    <form action="" id="Search_CRM" class="m-0 flex-grow-1" style="max-width: 220px;">
                                        <div class="input-group input-group-sm border rounded shadow-sm">
                                            <span class="input-group-text bg-white border-0 pe-1 text-muted">
                                                <i class="fa-solid fa-magnifying-glass small"></i>
                                            </span>
                                            <input type="search" name="CRM" id="CRM" class="form-control border-0 shadow-none ps-1 small" placeholder="Rechercher...">
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <table class="info-client">
                                <tr>
                                    <th>Client</th>
                                    <th>E-mail</th>
                                    <th>Téléphone</th>
                                    <th>Origine</th>
                                    <th>Date</th>
                                    <th>Interactions</th>
                                    <th hidden></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>

                        <!-- Source d'acquisition -->
                        <div class="card border-0 mb-3">
                            <div class="card-header bg-white border-0 py-3">
                                <h2 class="h5 m-0">Source d'acquisition</h2>
                            </div>
                        </div>

                        <!-- Activité récente -->
                        <div class="card border-0">
                            <div class="card-header bg-white border-0 py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="h5 m-0">Activité récente</h2>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Voir tout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Colonne droite : Fiche client -->
                    <div class="col-lg-4">
                        <!-- Fiche Client -->
                        <div class="card border-0 mb-3">
                            <!-- En-tête fiche -->
                            <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
                                <h2 class="h5 m-0">Fiche client</h2>
                                <button class="btn-close" aria-label="Fermer la fiche"></button>
                            </div>

                            <div class="card-body">
                                <!-- Profil Client -->
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="rounded-circle bg-light p-3" style="width: 48px; height: 48px; flex-shrink: 0;">
                                        <i class="fa-solid fa-user text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="h6 m-0 fw-bold">Daniel AHOUANSOU</h3>
                                        <span class="badge bg-light text-primary small">Prospect chaud</span>
                                    </div>
                                    <button class="btn btn-link text-muted p-0" aria-label="Ajouter aux favoris">
                                        <i class="fa-regular fa-star"></i>
                                    </button>
                                </div>

                                <!-- Coordonnées -->
                                <div class="border-bottom border-light pb-3 mb-3">
                                    <p class="small text-muted mb-2"><i class="fa-solid fa-envelope me-2 text-muted"></i> danielahouansou16@gmail.com</p>
                                    <p class="small text-muted mb-2"><i class="fa-solid fa-phone me-2 text-muted"></i> +229 01 50 90 42 95</p>
                                    <p class="small text-muted mb-0"><i class="fa-solid fa-location-dot me-2 text-muted"></i> Abomey-Calavi, Bénin</p>
                                </div>

                                <!-- Métadonnées & Origine -->
                                <div class="mb-3">
                                    <p class="small mb-2">
                                        <strong class="d-inline">Origine :</strong>
                                        <span class="badge bg-light text-primary ms-1">
                                            <i class="fa-solid fa-download"></i> Demande de devis
                                        </span>
                                    </p>
                                    <p class="small text-muted mb-1">Client depuis le 21 mai 2024</p>
                                    <p class="small text-muted mb-0">7 interactions au total</p>
                                </div>

                                <!-- Actions -->
                                <div class="d-grid gap-2">
                                    <a href="mailto:danielahouansou16@gmail.com" class="btn btn-primary btn-sm">
                                        <i class="fa-regular fa-envelope me-2"></i>Envoyer un e-mail
                                    </a>
                                    <a href="https://wa.me/2290150904295" target="_blank" class="btn btn-success btn-sm">
                                        <i class="fa-brands fa-whatsapp me-2"></i>Relancer sur WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Notes internes -->
                        <div class="card border-0 mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="h6 m-0 fw-bold">Notes internes</h3>
                                    <a href="#" class="text-primary small">Modifier</a>
                                </div>
                                <div class="alert alert-light mb-0 small">
                                    <p class="mb-2">Intéressé par un PC bureautique pour son cabinet. Budget autour de 250 000 FCFA. Relance prévue cette semaine.</p>
                                    <small class="text-muted d-block">Ajoutée par Admin, le 21 mai 2024</small>
                                </div>
                            </div>
                        </div>

                        <!-- Historique des devis -->
                        <div class="card border-0 mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="h6 m-0 fw-bold">Historique des devis</h3>
                                    <a href="#" class="text-primary small">Voir tout</a>
                                </div>
                                <!-- Devis 1 -->
                                <div class="d-flex justify-content-between align-items-center py-2 border-bottom border-light small">
                                    <span class="fw-bold">Devis #0250</span>
                                    <span class="text-muted">21 mai 2024</span>
                                    <span class="fw-bold">450 000 FCFA</span>
                                    <span class="badge bg-success">Téléchargé</span>
                                </div>
                                <!-- Devis 2 -->
                                <div class="d-flex justify-content-between align-items-center py-2 border-bottom border-light small">
                                    <span class="fw-bold">Devis #0214</span>
                                    <span class="text-muted">15 mar 2024</span>
                                    <span class="fw-bold">650 000 FCFA</span>
                                    <span class="badge bg-success">Téléchargé</span>
                                </div>
                                <!-- Devis 3 -->
                                <div class="d-flex justify-content-between align-items-center py-2 small">
                                    <span class="fw-bold">Devis #0105</span>
                                    <span class="text-muted">10 jan 2024</span>
                                    <span class="fw-bold">320 000 FCFA</span>
                                    <span class="badge bg-success">Téléchargé</span>
                                </div>
                            </div>
                        </div>

                        <!-- Historique des commentaires -->
                        <div class="card border-0 mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="h6 m-0 fw-bold">Historique des commentaires</h3>
                                    <a href="#" class="text-primary small">Voir tout</a>
                                </div>
                                <!-- Commentaire 1 -->
                                <div class="border-bottom border-light pb-2 mb-2">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="h6 m-0 fw-bold">Commentaire sur HP EliteBook 840 G8</h4>
                                            <p class="small text-muted mb-0">« Très bonnes machines, disponibles ? »</p>
                                        </div>
                                        <div class="text-end ms-2">
                                            <p class="small text-muted mb-1">20 mai 2024</p>
                                            <span class="badge bg-success small">Répondu</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Commentaire 2 -->
                                <div>
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="h6 m-0 fw-bold">Commentaire sur Lenovo ThinkPad E14</h4>
                                            <p class="small text-muted mb-0">« Quel est le délai de livraison ? »</p>
                                        </div>
                                        <div class="text-end ms-2">
                                            <p class="small text-muted mb-1">18 mai 2024</p>
                                            <span class="badge bg-success small">Répondu</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dernière conversation -->
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="h6 m-0 fw-bold">Dernière conversation</h3>
                                    <a href="#" class="text-primary small">Voir tout</a>
                                </div>
                                <!-- En-tête message -->
                                <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom border-light">
                                    <div class="rounded-circle bg-light p-2" style="width: 28px; height: 28px;">
                                        <i class="fa-solid fa-user small text-muted"></i>
                                    </div>
                                    <span class="small fw-bold flex-grow-1">Jean Dupont (WhatsApp)</span>
                                    <span class="small text-muted">20 mai 2024 à 14:12</span>
                                </div>
                                <!-- Message reçu -->
                                <div class="alert alert-light small mb-2">Bonjour, le HP 840 G8 est toujours disponible à 250k ?</div>
                                <!-- Message envoyé -->
                                <div class="text-end mb-3">
                                    <small class="text-muted d-block mb-1">Vu</small>
                                    <div class="alert alert-info small mb-0" style="max-width: 85%; margin-left: auto;">Oui il est toujours disponible. Vous souhaitez passer commande ?</div>
                                </div>
                                <!-- Lien voir conversation -->
                                <a href="#" class="d-block text-center text-muted text-decoration-none pt-2 border-top border-light small">
                                    Voir la conversation complète <i class="fa-solid fa-rotate-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>

    </div>

    <!-- Fichiers JS (placés avant </body>) -->
    <script src=" ../assets/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>