# SAE développement web PHP

**Groupe de SAE:** Vinh Tan Thomas Nguyen - Audren METERY-DROUIN - Mathias MALLET - Lucas Franceschi--Pinson

**Explication de l'architecture:**
- SAE/index.php : Sert de routeur, il connecte les script controllers/views/models entre-eux
- SAE/modules/views/ : Répertoire contenant les vues (HTML)
- SAE/_assets/styles/ : Répertoire contenant l'apparence des vues (CSS)
- SAE/modules/controllers/ : Répertoire contenant les controllers (gère la logique)
- SAE/modules/models/ : Répertoire contenant les models (gère les requêtes SQL)

**Pages:**
- accueil (page d'arrivée)
- authentification (pour se connecter)
- forgottenPwd (pour mot de passe oublier)
- inscription (pour s'inscrire)
- legalNotice (Mentions légales)
- map (Pour une vue de toutes les pages) (j'ai pas compris pk mais ok?)

**Nommage des fichiers:**
Nom pour les fichiers de chaque page:
- nameController (PHP) / nameView (PHP) / nameModel (SQL) / nameStyle (CSS)

**Noyaux:**
noyau/modele.php : Gère la connection à la BD à l'aide d'une classe abstraite dont les autre modèles héritent

**Wip:**
Pour changer de page:
header('Location: index.php?action=accueil');
Pour que un boutton redirige vers le routeur + choisir la page:
"<a href="index.php?action=profil">Aller au profil</a>"

**Comment développer le projet :**
- Créer une branche et s'y déplacer à l'aide de `git checkout -b NOM_BRANCH`
    Le nom doit avoir la forme TYPE/NOM avec le nom étant ce qui à été fait (exemple: fix/readme ou alors feature/accueilController)
- Coder la feature ou le fix
- Commit les changements `git add .` et `git commit -m "description ici"`
- Push les changement de la branche sur le repository `git push --set-upstream origin NOM_BRANCH`
- Créer une pull request depuis github
- Enfin merge la branche depuis github

**Figma et tâches à faire (WIP)**

- lien vers le figma: https://www.figma.com/design/iS7WhzXagqkpUug2JtRhVe/Figma-basics?node-id=0-286&p=f&t=a5oPFU4l2P1qzT7s-0
- logo en création
