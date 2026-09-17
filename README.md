# SAE développement web PHP

**Groupe de SAE:** Vinh Tan Thomas Nguyen - Audren METERY-DROUIN - Mathias MALLET - Lucas Franceschi--Pinson

**Explication de l'architecture:**
- SAE/index.php : Sert de routeur, il connecte les script controllers/views/models entre-eux
- SAE/views/ : Répertoire contenant les vues (HTML / CSS)
- SAE/controllers/ : Répertoire contenant les controllers (gère la logique)
- SAE/models/ : Répertoire contenant les models (gère les requêtes SQL)

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
noyau/modele.php : Gère la connection à la BD à l'aide d'une classe abstraite donc les autre modèles héritent

**Wip:**
Pour changer de page
header('Location: index.php?action=accueil');
Pour que un boutton redirige vers le routeur + choisir la page
"<a href="index.php?action=profil">Aller au profil</a>"