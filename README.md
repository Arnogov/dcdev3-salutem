# Salutem

## Installation 
```shell script
composer install
npm install
```

```shell script 
symfony serve
npm run watch
```

## Création d'un projet Symfony

### Créer le projet
```shell script
symfony new salutem --full
```
ou

```shell script
composer create-project symfony/website-skeleton salutem
```

Eventuellement modifier le fichier .gitignore

### Installer WebPack Encore    
```shell script
composer require symfony/webpack-encore-bundle
npm install
```

#### Activer SASS

Décommenter la ligne suivante du fichier webpack.config.js
```shell script
.enableSassLoader()
```

