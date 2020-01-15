Salutem
Installation
composer install
npm install
Créer la connection à la base de données (fichier .env.local avec DATABASE_URL).

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
Générer les fixtures :

php bin/console doctrine:fixtures:load
Puis mettre les images dynamiques dans le dossier public/uploads

symfony serve
npm run watch
Création d'un projet Symfony
Créer le projet
symfony new salutem --full
OU

composer create-project symfony/website-skeleton salutem
Eventuellement modifier le fichier .gitignore

Installer WebPack Encore
https://symfony.com/doc/current/frontend.html

composer require symfony/webpack-encore-bundle
npm install
Activer SASS
Décommenter la ligne suivante du fichier webpack.config.js

.enableSassLoader()
Renommer le fichier assets/css/style.css enassets/css/style.scss

Modifier la ligne suivante dans le fichier assets/js/app.js

import '../css/app.scss';
Installer les dépendances pour SASS puis compiler les fichiers

npm install sass-loader@^7.0.1 node-sass --save-dev
npm run watch
Intégrer le code HTML dans les fichiers Twig
Créer un controller pour la page d'accueil

php bin/console make:controller DefaultController
Création des entités
Créer la base de données avec MySQL Workbench

Créer les classes (entités) PHP

php bin/console make:entity
Créer la base de données dans MySQL

php bin/console doctrine:database:create
Créer le fichier de migration

php bin/console make:migration
Exécuter les migrations

php bin/console doctrine:migrations:migrate
En cas de problème :

Supprimer les fichiers de migration
Supprimer puis recréer la base de données :
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
Récréer le fichier de migration puis executer les migrations :
php bin/console make:migration
php bin/console doctrine:migrations:migrate
Création des données de test
https://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html

composer req --dev orm-fixtures
Générer des fichiers de fixtures :

php bin/console make:fixtures
Exécuter les fixtures :

php bin/console doctrine:fixtures:load
