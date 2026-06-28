# 💻 FIN-TECH ORDIS — Notre Système de Vente Automatisé

> **Le Catalogue Web Premium & son Dashboard CRM**  
> Une solution web complète et responsive conçue sur-mesure pour automatiser le cycle de vente de matériels informatiques au Bénin. Notre objectif ? Permettre au client de trouver sa machine idéale et de générer son devis en moins de 4 clics, tout en offrant à l'administrateur un outil de gestion puissant pour centraliser ses flux de vente et ses stocks.

---

## 📂 Les Ressources du Projet (Drive & Design)

Pour garder un dépôt de code propre et léger, nous avons centralisé tous nos fichiers de travail et visuels sur Google Drive. Vous pouvez les consulter directement via ces liens :

*   🎨 **[Découvrir les Maquettes UI/UX](https://drive.google.com/drive/folders/1y_em_LuYa7qb85SVc-hDLVeL7LB9_Sd8?usp=drive_link)** : L'intégralité du design fonctionnel de la plateforme (Fiche produit, Catalogue dynamique, Dashboard Admin).
*   📑 **[Consulter les Documents Techniques](https://drive.google.com/drive/folders/16dg57nBEq3Nu3rnMbCjrQETqM7bxTem3?usp=drive_link)** : Notre dossier partagé regroupant le Cahier des Charges Technico-Fonctionnel, le Dictionnaire de Données (DDD) et les scripts d'architecture.

---

## 👥 L'Équipe derrière le Projet

Nous sommes une équipe de 5 étudiants passionnés, unissant nos compétences pour propulser l'activité de Fin-Tech Ordis à un niveau supérieur :
*   **Daniel AHOUANSOU** 
*   **Edna BAKARY**
*   **Amos TOTIN**
*   **Bilal PEDRO**
*   **Bel-Mira KOUELO-ALLADASSI**

---

## 🚀 Ce que fait l'Application (Fonctionnalités clés)

### 🌐 Côté Client : Une expérience fluide et sans barrière
*   **Navigation éclair (Règle des 4 clics) :** L'acheteur trouve son bonheur et télécharge son devis PDF ou bascule sur WhatsApp sans jamais avoir besoin de créer un compte ou de retenir un mot de passe*.
*   **Moteur de filtrage instantané (`catalogue.php`) :** Développé en JavaScript pur (Vanilla JS), il permet de trier le stock en temps réel selon le budget, la marque ou l'usage (Bureautique, Étudiant, Dev/Graphisme, Gaming) sans aucun rechargement de page.
*   **Fiches produits ultra-détaillées (`produit.php`) :** Carrousel multi-images et caractéristiques techniques poussées (Écran, Carte graphique, OS, Batterie).
*   **Espace d'avis authentiques :** Section de commentaires ciblés par machine, affichant les retours clients et la réponse officielle de l'administration juste en dessous.
*   **Bulle de chat flottante :** Un module de messagerie accessible partout (`includes/footer.php`) pour permettre aux visiteurs d'engager une discussion privée instantanément.

### 🔐 Côté Admin : Un contrôle total et sécurisé
*   **Sécurité et confidentialité (`login.php`) :** Sessions PHP strictes, mots de passe hachés en Bcrypt, champs opaques anti-regards indiscrets et barrière anti-robot Google reCAPTCHA v3.
*   **Gestion d'Inventaire intuitive (CRUD) :** Interface pour ajouter des ordinateurs (avec upload multi-images), modifier les fiches et supprimer les produits (avec nettoyage automatique des fichiers locaux).
*   **Mini-CRM intelligent (`clients-crm.php`) :** Un système unique d'unicité client (zéro doublon d'email) qui centralise l'historique de chaque contact (provenance devis, avis ou chat)[cite: 1, 5] avec boutons de relance WhatsApp et Email (PHPMailer) intégrés.
*   **Modération & Messagerie :** Une boîte de réception privée pour répondre au chat en temps réel et un espace pour valider/répondre aux avis avant publication.

---

## 🛠️ Nos Choix Techniques

*   **Frontend :** HTML5 sémantique, CSS3, et Bootstrap 5 pour garantir un affichage parfait sur smartphone, tablette et PC.
*   **Scripting Client :** JavaScript (Vanilla JS) pour une réactivité maximale sur le catalogue.
*   **Backend & Logique :** PHP 8 avec une connexion sécurisée PDO pour le traitement des données et des sessions.
*   **Base de Données :** MySQL (Moteur relationnel InnoDB) configuré sous environnement XAMPP.
*   **Outils embarqués :** `DomPDF` (pour générer les devis au format PDF officiel) et `PHPMailer` (pour les envois d'e-mails professionnels).

---

## 📐 Notre Méthodologie de Travail

1.  **Le Visuel d'abord ("Front-First") :** Nous avons fait le choix de coder, styliser et valider l'intégralité de nos interfaces avec de fausses données pour figer le design avant d'attaquer la logique serveur.
2.  **Règle de symétrie absolue :** Pour éviter les maux de tête lors de la connexion à la base de données, les attributs `name=""` de nos formulaires HTML sont de parfaits miroirs des champs définis dans notre Dictionnaire de Données (DDD).