<?php
function start_page() {
    echo '<title>Titre ici</title>';
}
function end_page() {
    echo '<p>Fin de page ici</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <?php start_page(); ?>
    </header>
    <body>
        <div>
            <form method='post'>
                <input name='form[id]' type="text">
                <input name='form[gender]' type="radio">
                <input name='form[email]' type="text">
                <input name='form[mdp]' type="password">
                <input name='form[mdp2]' type="password">
                <input name='form[phone]' type="text">
                <select name='form[country]'>
                    <option value='fr'>France</option>
                    <option value='en'>Angleterre</option>
                    <option value='us'>États-Unis</option>
                </select>
                <input name='form[generalCondition]' type="checkbox">
                <input type="submit">
            </form>
        </div>
    </body>
    <footer>
        <p><?php end_page(); ?><p>
    </footer>
</html>