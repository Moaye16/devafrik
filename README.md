# DEV AFRIK INVESTMENT HOLDING

Projet web de **DEV AFRIK INVESTMENT HOLDING**, entreprise de BTP et d'investissement basée en Côte d'Ivoire.

## Stack technique
- **Langage** : PHP 8.x
- **Architecture** : MVC maison (`core`, `controller`, `model`, `view`, `webroot`)
- **Serveur web** : Apache (avec URL rewriting vers `webroot`)
- **Base de données** : MySQL / MariaDB (`devafrik_local.sql`)
- **Front-end** : Bootstrap, jQuery, Owl Carousel, Flexslider

## Démarrage en local (Laragon ou Apache)
1. Cloner le projet ou copier le dossier `devafrik` dans votre répertoire web (ex : `C:\laragon\www\devafrik`).
2. Configurer Apache pour faire pointer le `DocumentRoot` vers le dossier `webroot`.
3. Importer la base de données :
   ```sql
   CREATE DATABASE devafrik_local CHARACTER SET utf8mb4;
   USE devafrik_local;
   SOURCE devafrik_local.sql;
   ```
4. Vérifier la configuration dans `config/conf.php`.
5. Accéder au site via votre nom de domaine local (ex: `http://devafrik.test`).

## Améliorations et corrections apportées
- **Intégration du contenu client** : Énergie (contrat 119 MW, signatures 102 MW et 258 MW), Mines et produits chimiques miniers (gypse 2025 au Niger, présence régionale), Immobilier (1 050 logements sociaux SNGI, 281 villas Motobé Grand-Bassam, Assouindé et cité ADO), Direction, et phrase de synthèse.
- **Correction des chemins des polices d'icônes Icomoon** dans `webroot/css/css_daih/style.css` (résolution des erreurs 404).
- **Correction de la feuille de style Owl Carousel** (`owl.theme.default.min.css`) dans `view/layout/default.php`.
- **Correction de balisage** dans la vue recrutement (`view/recrutements/index.php`).
- **Support du routage de la page Promotions** (`controller/PromotionController.php`).
- **Correction des images manquantes de la galerie** dans `webroot/img/galerie/2021/` et génération d'un export SQL à jour avec la colonne `page_id` (`devafrik_local.sql`).
