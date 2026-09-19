<?php
function start_page() {
    echo '<title>Titre ici</title>';
}
function end_page() {
    echo '<p>Fin de page ici</p>';
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_assets/styles/authentificationStyle.css">
        <?php start_page(); ?>
    </head>
    <body>
        <div>
            <?php
            if (!isset($_SESSION['suid'])) {
                // On affiche le formulaire et les liens pour s'inscrire ou récupérer son mot de passe si on est pas connecté
                <<<HTML
                <h1>Se connecter :</h1>
                <form method='post' class="form_bg" action="index.php?page=authentification">
                    <p>Login:</p>
                    <input name='form[id]' type="text">
                    <p>Mot de passe:</p>
                    <input name='form[mdp]' type="password">
                </form>

                <a href="index.php?page=inscription">S\'inscrire</a><br>
                <a href="index.php?page=forgottenPwd">Mot de passe oublié</a>
                HTML;
            } else {
                // On affiche que l'on est connecté
                <<<HTML
                <h1>Actuellement connecté en tant que :</h1>
                HTML;
                $username = $_SESSION['username'];
                echo "<p>$username</p>";
            }
            ?>
        </div>
    </body>
    <footer>
        <p><?php end_page(); ?><p>
    </footer>
</html>