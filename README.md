# SAE développement web PHP

### Statut du projet & Qualité
[![CI](https://github.com/QuiEstCe-IUT/BUT-R3.01-SAE/actions/workflows/ci.yml/badge.svg)](https://github.com/QuiEstCe-IUT/BUT-R3.01-SAE/actions/workflows/ci.yml)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=QuiEstCe-IUT_BUT-R3.01-SAE&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=QuiEstCe-IUT_BUT-R3.01-SAE)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=QuiEstCe-IUT_BUT-R3.01-SAE&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=QuiEstCe-IUT_BUT-R3.01-SAE)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=QuiEstCe-IUT_BUT-R3.01-SAE&metric=security_rating)](https://sonarcloud.io/summary/new_code?id=QuiEstCe-IUT_BUT-R3.01-SAE)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=QuiEstCe-IUT_BUT-R3.01-SAE&metric=bugs)](https://sonarcloud.io/summary/new_code?id=QuiEstCe-IUT_BUT-R3.01-SAE)
[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=QuiEstCe-IUT_BUT-R3.01-SAE&metric=coverage)](https://sonarcloud.io/summary/new_code?id=QuiEstCe-IUT_BUT-R3.01-SAE)
![Last Commit](https://img.shields.io/github/last-commit/QuiEstCe-IUT/BUT-R3.01-SAE?style=flat)


### Technologie
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-4169E1?style=flat&logo=postgresql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
![Sass / SCSS](https://img.shields.io/badge/SCSS-CC6699?style=flat&logo=sass&logoColor=white)
![Maven](https://img.shields.io/badge/Apache%20Maven-C71A36?style=flat&logo=Apache%20Maven&logoColor=white)
![Repo Size](https://img.shields.io/github/repo-size/QuiEstCe-IUT/BUT-R3.01-SAE?style=flat-square&logo=github&logoColor=white)

## Equipe de réalisation

![Contributors](https://img.shields.io/github/contributors/QuiEstCe-IUT/BUT-R3.01-SAE?style=flat&color=blue)
- Audren METERY-DROUIN [![GitHub](https://img.shields.io/badge/GitHub-181717?style=flat-square&logo=github&logoColor=white)](https://github.com/AmadeusTdev)
- Mathias MALLET [![GitHub](https://img.shields.io/badge/GitHub-181717?style=flat-square&logo=github&logoColor=white)](https://github.com/eabc2318)
- Loriol Mathis [![GitHub](https://img.shields.io/badge/GitHub-181717?style=flat-square&logo=github&logoColor=white)](https://github.com/Mathis-LAURIOL-TORCQ)
- Vinh Tan Thomas Nguyen [![GitHub](https://img.shields.io/badge/GitHub-181717?style=flat-square&logo=github&logoColor=white)](https://github.com/Nguyen-Thomas1)
- Lucas Franceschi--Pinson [![GitHub](https://img.shields.io/badge/GitHub-181717?style=flat-square&logo=github&logoColor=white)](https://github.com/FRANCESCHI-PINSON-Lucas-25008772)


## Architecture

```text
.
├── _assets
│   ├── includes
│   └── utils
├── composer.json
├── composer.lock
├── database
│   └── dump.sql
├── kernel
│   └── model.php
├── src
│   ├── controllers
│   ├── models
│   └── views
├── phpcs.xml
├── phpstan.neon
├── phpunit.xml
├── projet-dev-web.code-workspace
├── prompts.md
├── public
│   ├── assets
│   ├── favicon.ico
│   └── index.php
├── README.md
├── sonar-project.properties
└── tests
    ├── bootstrap.php
    ├── db-connection-test.php
    ├── db-innsertion-user-test.php
    ├── old-db-connection-test.php
    └── SmokeTest.php
```



## Liste des pages et conventions:
**Pages de l'Application**
- `public/index.php` : Sert de routeur, il connecte les script controllers/views/models entre-eux
- `src/views/` : Répertoire contenant les vues (HTML)
- `_assets/styles/` : Répertoire contenant l'apparence des vues (CSS/SCSS)
- `src/controllers/` : Répertoire contenant les controllers (gère la logique)
- `src/models/` : Répertoire contenant les models (gère les requêtes SQL)

**Pages:**
- `accueil` (page d'arrivée)
- `authentification` (pour se connecter)
- `forgottenPwd` (pour mot de passe oublier)
- `inscription` (pour s'inscrire)
- `legalNotice` (Mentions légales)
- `map` (Pour une vue de toutes les pages)

**Nommage des fichiers:**
Nom pour les fichiers de chaque page:
- nameController (PHP) / nameView (PHP) / nameModel (SQL) / nameStyle (CSS)

**Noyaux:**
kernel/modele.php : Gère la connection à la BD à l'aide d'une classe abstraite dont les autre modèles héritent

**Wip:**
Pour changer de page:
header('Location: index.php?action=accueil');
Pour que un boutton redirige vers le routeur + choisir la page:
`"<a href="index.php?action=profil">Aller au profil</a>"`

**Comment développer le projet :**
- Créer une branche et s'y déplacer à l'aide de `git checkout -b NOM_BRANCH`
    Le nom doit avoir la forme TYPE/NOM avec le nom étant ce qui à été fait (exemple: fix/readme ou alors feature/accueilController)
- Coder la feature ou le fix
- Commit les changements `git add .` et `git commit -m "description ici"`
- Push les changement de la branche sur le repository `git push --set-upstream origin NOM_BRANCH`
- Créer une pull request depuis github
- Enfin merge la branche depuis github

**Figma et tâches à faire (WIP)**

- [Consulter l'interface sur Figma](https://www.figma.com/design/iS7WhzXagqkpUug2JtRhVe/Figma-basics?node-id=0-286&p=f&t=a5oPFU4l2P1qzT7s-0)

