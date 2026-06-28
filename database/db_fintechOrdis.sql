-- SCRIPT DE CRÉATION DE LA BASE DE DONNÉES FIN-TECH ORDIS
-- Encodage : UTF8mb4 (Prise en charge des accents et émojis)
CREATE DATABASE IF NOT EXISTS `fintech_db`
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;
USE `fintech_db`;

-- 1. Table : admin
CREATE TABLE IF NOT EXISTS `admin` (
id_admin INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_complet TEXT NOT NULL,
email_admin VARCHAR (100) NOT NULL UNIQUE,
mot_de_passe VARCHAR (255) NOT NULL,
create_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Insertion de l'admin pour l'authentification
INSERT INTO `admin` (`nom_complet`, `email_admin`, `mot_de_passe`) 
VALUES (
    'Equipe Fin-Tech', 
    'admin@fintech.com', 
    '$2y$10$wN9PclNfE.tW9VvB7b5YHeK0f5z3k.7gX9D2vRj9hN4eKm.c1eKeS'
);

-- Désactiver temporairement les clés étrangères pour éviter les conflits à la création
SET FOREIGN_KEY_CHECKS = 0;

-- 2. Table : categories
CREATE TABLE IF NOT EXISTS `categories` (
    id_cat INT AUTO_INCREMENT,
    nom_cat VARCHAR(100) NOT NULL,
    descrip TEXT,
    PRIMARY KEY (id_cat)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 3. Table : clients
CREATE TABLE IF NOT EXISTS `clients` (
    id_client INT AUTO_INCREMENT,
    nom_client VARCHAR(100) NOT NULL,
	prenom_client VARCHAR(100) NOT NULL,
    email_client VARCHAR(150) NOT NULL UNIQUE,
    tel_client VARCHAR(50) NOT NULL,
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP,
    provenance VARCHAR(50) NOT NULL, -- 'devis', 'commentaire' ou 'chat'
    PRIMARY KEY (id_client)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 4. Table : produits
CREATE TABLE IF NOT EXISTS `produits` (
    id_produit INT AUTO_INCREMENT,
    marque_produit VARCHAR(100) NOT NULL,
    modele_produit VARCHAR(100) NOT NULL,
    processeur_produit VARCHAR(100) NOT NULL,
    ram_produit VARCHAR(50) NOT NULL,
    stockage_produit VARCHAR(100) NOT NULL,
    prix_produit INT NOT NULL,
    etat_produit TEXT NOT NULL,
    quantite_stock INT NOT NULL,
    cat_id INT NOT NULL,
    PRIMARY KEY (id_produit),
    CONSTRAINT fk_produits_categories
        FOREIGN KEY (cat_id) REFERENCES `categories` (id_cat) 
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 5. Table : images_produit
CREATE TABLE IF NOT EXISTS `images_produit` (
    id_img INT AUTO_INCREMENT,
	img_url VARCHAR(255) NOT NULL,
    est_principale TINYINT(1) DEFAULT 0, -- 1 pour l'image vitrine, 0 pour la galerie
    produit_id INT NOT NULL,
    PRIMARY KEY (id_img),
    CONSTRAINT fk_images_produits
        FOREIGN KEY (produit_id) REFERENCES `produits` (id_produit) 
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 6. Table : devis
CREATE TABLE IF NOT EXISTS `devis` (
    id_devis INT AUTO_INCREMENT,
    prix_devis INT NOT NULL,
    date_generation DATETIME DEFAULT CURRENT_TIMESTAMP,
    statut_relance VARCHAR(50) DEFAULT 'En attente',
    client_id INT NOT NULL,
    produit_id INT NOT NULL,
    PRIMARY KEY (id_devis),
    CONSTRAINT fk_devis_clients
        FOREIGN KEY (client_id) REFERENCES `clients` (id_client) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_devis_produits
        FOREIGN KEY (produit_id) REFERENCES `produits` (id_produit) 
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 7. Table : commentaires
CREATE TABLE IF NOT EXISTS `commentaires` (
    id_avis INT AUTO_INCREMENT,
    note INT NOT NULL,
    commentaire_text TEXT NOT NULL,
    date_publication DATETIME DEFAULT CURRENT_TIMESTAMP,
    est_approuve TINYINT(1) DEFAULT 0, -- 0 = En attente (modération), 1 = Visible
    reponse_admin TEXT DEFAULT NULL,
    client_id INT NOT NULL,
    produit_id INT NOT NULL,
    PRIMARY KEY (id_avis),
    CONSTRAINT fk_commentaires_clients 
        FOREIGN KEY (client_id) REFERENCES `clients` (id_client) 
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_commentaires_produits
        FOREIGN KEY (produit_id) REFERENCES `produits` (id_produit) 
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 8. Table : messagerie
CREATE TABLE IF NOT EXISTS `messagerie` (
    id_message INT AUTO_INCREMENT,
    expediteur VARCHAR(100) NOT NULL, -- Nom stocké rapidement
    message_text TEXT NOT NULL,
    date_envoi DATETIME DEFAULT CURRENT_TIMESTAMP,
    message_lu TINYINT(1) DEFAULT 0,
    client_id INT NOT NULL,
    PRIMARY KEY (id_message),
    CONSTRAINT fk_messagerie_clients
        FOREIGN KEY (client_id) REFERENCES `clients` (id_client) 
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Réactiver les vérifications de clés étrangères
SET FOREIGN_KEY_CHECKS = 1;

-- Insertion des catégories d'usages
INSERT INTO `categories` (`nom_cat`, `descrip`) VALUES 
('Bureautique', 'Idéal pour le secrétariat, Word, Excel et la navigation internet fluide.'),
('Étudiant', 'Excellent rapport qualité/prix, parfait pour les cours, rapports et exposés.'),
('Graphisme/Développement', 'Équipé pour supporter les logiciels lourds comme Photoshop, Illustrator ou VS Code.'),
('Gaming', 'Machines de guerre avec carte graphique dédiée pour le jeu et le montage vidéo.');

USE fintech_db;
-- Renommer la colonne d'inscription pour refléter une simple interaction
ALTER TABLE `clients` 
CHANGE COLUMN `date_inscription` `date_interaction` DATETIME DEFAULT CURRENT_TIMESTAMP;

-- Ajouter le champ pour stocker le chemin de la pièce justificative du devis (optionnel au niveau SQL, géré en PHP)
ALTER TABLE `clients` 
ADD COLUMN `image_justificatif` VARCHAR(255) DEFAULT NULL AFTER `provenance`;

-- Modifier le type de la colonne état pour plus de propreté
ALTER TABLE `produits` 
MODIFY COLUMN `etat_produit` VARCHAR(50) NOT NULL COMMENT 'Neuf, Quasi-neuf, Reconditionné';

-- Ajouter les colonnes de la fiche technique après les caractéristiques de base
ALTER TABLE `produits` 
ADD COLUMN `ecran_produit` VARCHAR(100) DEFAULT NULL AFTER `stockage_produit`,
ADD COLUMN `carte_graphique` VARCHAR(100) DEFAULT NULL AFTER `ecran_produit`,
ADD COLUMN `os_produit` VARCHAR(100) DEFAULT 'Windows 11' AFTER `carte_graphique`,
ADD COLUMN `batterie_produit` VARCHAR(100) DEFAULT NULL AFTER `os_produit`;