# ArcheryTrack

ArcheryTrack est une plateforme dédiée aux archers de tous niveaux, offrant un ensemble d'outils pour suivre leur progression, gérer leur équipement, participer à des concours, et interagir avec leur club et entraîneur.

## Table des matières

1. [Introduction](#introduction)
2. [Prérequis](#prérequis)
2. [Installation](#installation)
3. [Utilisation](#utilisation)
4. [Contributions](#contributions)
5. [Licence](#licence)
6. [Crédits](#crédits)

## Introduction

ArcheryTrack est conçu pour répondre aux besoins des archers, en offrant un espace centralisé pour gérer tous les aspects de leur pratique du tir à l'arc. Que vous soyez débutant ou expert, ArcheryTrack vous accompagne dans votre progression en fournissant des outils personnalisés et une communauté engagée.


## Prérequis

Avant de commencer l'installation d'ArcheryTrack, assurez-vous que votre système répond aux prérequis suivants :

1. **NPM**: Assurez-vous d'avoir NPM (Node Package Manager) installé sur votre système. NPM est nécessaire pour gérer les dépendances JavaScript de votre projet. Vous pouvez l'installer en installant Node.js, qui inclut NPM. Suivez les instructions sur [nodejs.org](https://nodejs.org/) pour installer Node.js et NPM.

2. **PHP**: Vérifiez que votre système dispose de PHP version 8.1 ou supérieure.

3. **Composer**: Assurez-vous d'avoir Composer installé sur votre système pour gérer les dépendances PHP. Si ce n'est pas le cas, vous pouvez l'installer en suivant les instructions sur [getcomposer.org](https://getcomposer.org/).

Une fois que vous avez vérifié ces prérequis, vous êtes prêt à procéder à l'installation d'ArcheryTrack.

## Installation

Pour utiliser ArcheryTrack localement, suivez ces étapes :
1. Clonez le dépôt depuis GitHub.
2. Installez les dépendances en exécutant `npm install`.
3. Installez les dépendances php en exécutant `composer install`.
4. Dupliquer le fichier .env.exemple et renommez le en .env.
5. Executez la commande `php artisan key:generate`.
6. Crée votre base de donnée.
7. Inserer votre configuration de votre base de donnée dans le .env.
8. Apres la configuration de la base faire un `php artisan migrate`.
9. Lancez l'application avec `npm run build`.

## Utilisation

Une fois l'application installée, vous pouvez accéder à l'interface utilisateur via votre navigateur web. Connectez-vous ou inscrivez-vous pour commencer à utiliser les fonctionnalités d'ArcheryTrack, telles que la gestion de votre profil, de votre équipement, la participation à des concours, et bien plus encore. [WIP]

## Contributions

Nous accueillons les contributions de la communauté pour améliorer ArcheryTrack. Pour contribuer, suivez ces étapes :
1. Fork le dépôt sur GitHub.
2. Créez une nouvelle branche pour vos modifications.
3. Faites vos modifications et testez-les localement.
4. Soumettez une pull request vers la branche principale.

## Licence

Ce projet est sous licence MIT. Veuillez consulter le fichier LICENSE.md pour plus d'informations.

## Crédits

ArcheryTrack a été développé en utilisant les technologies suivantes :

- Laravel : Framework PHP utilisé pour le développement backend.
- Livewire : Bibliothèque PHP pour le développement d'interfaces utilisateur interactives.
- Alpine.js : Framework JavaScript pour la création d'interfaces utilisateur dynamiques.
- Tailwind CSS : Framework CSS utilisé pour styliser l'interface utilisateur.
- MySQL : Système de gestion de base de données relationnelle.
- npm : Gestionnaire de paquets JavaScript utilisé pour l'installation des dépendances frontend.
- Composer : Gestionnaire de dépendances PHP utilisé pour l'installation des dépendances backend.
- GitHub : Plateforme de développement collaboratif utilisée pour le stockage du code source et la gestion des versions.

Nous tenons à remercier les développeurs et les contributeurs de ces projets open source pour leur travail exceptionnel qui a permis la création d'ArcheryTrack.

