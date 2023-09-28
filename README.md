# Nom du Projet Laravel

Ce guide explique comment cloner et exécuter ce projet Laravel depuis GitHub sur votre machine locale.

## Prérequis

Assurez-vous d'avoir les outils suivants installés sur votre machine :
- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/) (avec une version compatible avec le projet Laravel)

## Étapes

1. **Clonez le Projet depuis GitHub** :
   - Ouvrez votre terminal ou invite de commande.
   - Naviguez vers le répertoire où vous souhaitez cloner le projet en utilisant `cd`.
   - Exécutez la commande suivante pour cloner le projet :

     ```bash
     https://github.com/Microservice-crew/SocialNetwork.git
     ```

   Remplacez `nom-utilisateur` par le nom d'utilisateur du propriétaire du projet GitHub et `nom-projet` par le nom du projet.

2. **Accédez au Répertoire Cloné** :
   - Naviguez vers le répertoire cloné en utilisant `cd`. Par exemple :

     ```bash
     cd laravel9
     ```

3. **Installez les Dépendances Composer** :
   - Exécutez la commande suivante pour installer les dépendances Composer :

     ```bash
     composer install
     ```

4. **Copiez le Fichier .env** :
   - Copiez le fichier `.env.example` en utilisant la commande suivante :

     ```bash
     cp .env.example .env
     ```

5. **Générez la Clé d'Application** :
   - Générez une nouvelle clé d'application Laravel avec la commande :

     ```bash
     php artisan key:generate
     ```

6. **Configurez la Base de Données** :
   - Configurez les paramètres de base de données dans le fichier `.env` selon votre environnement. "nom de la base de données (laravel)"

7. **Exécutez les Migrations** :
   - Créez les tables de base de données en exécutant les migrations :

     ```bash
     php artisan migrate
     ```

8. **Lancez le Serveur de Développement** :
   - Démarrez le serveur de développement avec la commande :

     ```bash
     php artisan serve
     ```

   L'application sera accessible à l'adresse par défaut `http://localhost:8000`.

9. **Accédez à l'Application** :
   - Ouvrez un navigateur web et accédez à l'URL `http://localhost:8000` (ou à l'URL spécifiée par le serveur de développement) pour utiliser l'application Laravel.

C'est tout ! Vous avez cloné, configuré et exécuté avec succès le projet Laravel sur votre machine locale. Commencez à travailler sur le projet et apportez les modifications nécessaires.
