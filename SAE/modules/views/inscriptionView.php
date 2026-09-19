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
        <link rel="stylesheet" href="_assets/styles/inscriptionStyle.css">
        <?php start_page(); ?>
    </head>
    <body>
        <div>
            <h1>S'inscrire :</h1>
            <form method='post' class="form_bg" action="index.php?page=inscription">
                <p>Login:</p>
                <input name='form[id]' type="text">
                <p>Email:</p>
                <input name='form[email]' type="text">
                <p>Mot de passe:</p>
                <input name='form[mdp]' type="password">
                <p>Confirmation du mot de passe:</p>
                <input name='form[mdp2]' type="password">
                <p>Conditions générales:</p>
                <input name='form[generalCondition]' type="checkbox">
                <input type="submit">
            </form>
        </div>
    </body>
    <footer>
        <p><?php end_page(); ?><p>
    </footer>
</html>