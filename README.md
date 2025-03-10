# SAE - Développement d'un composant décisionnel

Projet universitaire de 2ème année BUT Science des Données

## Description
Application web d'analyse de données permettant la visualisation de statistiques via des graphiques interactifs.

## Technologies utilisées
- PHP
- HTML
- JavaScript
    - Chart.js pour la visualisation des données

## Installation
1. Cloner le repository
```bash
git clone [url-du-repo]
```
2. Configurer votre serveur web (Apache/PHP)
3. Ouvrir le projet dans votre navigateur

## Structure du projet
```
├── controllers/
│   └── controller.php
├── includes/
│   ├── .htaccess
│   └── config.inc.php
├── models/
│   ├── indicateur.php
│   ├── pays.php
│   └── regions.php
├── public/
│   ├── graphique.js
│   └── style.css
├── views/
│   ├── analyse_indicateurs.php
│   ├── comparaison_pays.php
│   ├── evolution_indicateurs.php
│   └── infos_pays.php
├── index.php
└── README.md
```

## Auteurs
- Matthias Defretin

## Licence
Ce projet est sous licence MIT

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
