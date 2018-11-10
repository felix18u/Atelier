# MyGiftBox

- Trello: https://trello.com/b/XWOk1vxS/atelier

## Requirements

- PHP7.1.3
- Laravel Framework 5.7.12
- Composer
- Base de données SQL (de préférence MySQL)
- Apache

## Installation

- Cloner le dépôt Git
- Copier le fichier .env.example (fichier caché), le renommer .env
- Dans le dossier contenant le projet, exécuter la commande: php artisan key:generate
- Modifier les champs "DB_DATABASE", "DB_USERNAME" et "DB_PASSWORD" du fichier .env selon votre base de données
- Dans le dossier contenant le projet, exécuter la commande: composer install
- Exécuter les migrations de la base de données: php artisan migrate --seed
- Vérifier dans votre base de données que les tables ont bien été créées
- Dans le dossier contenant le projet, exécuter la commande: php artisan serve

## Sources

- Documentation Laravel : https://laravel.com/docs/5.7
- Cours/Tutoriel Laravel : https://laravel.sillo.org/