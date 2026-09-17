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
            <form method='post' class="form_bg">
                <p>Login:</p>
                <input name='form[id]' type="text">
                <p>Genre</p>
                <input name='form[gender]' type="radio">
                <p>Email:</p>
                <input name='form[email]' type="text">
                <p>Mot de passe:</p>
                <input name='form[mdp]' type="password">
                <p>Confirmation du mot de passe:</p>
                <input name='form[mdp2]' type="password">
                <p>Numéro de téléphone:</p>
                <input name='form[phone]' type="text">
                <p>Pays:</p>
                <select name='form[country]'>
                    <option value='fr'>France</option>
                    <option value='en'>Angleterre</option>
                    <option value='us'>États-Unis</option>
                </select>
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