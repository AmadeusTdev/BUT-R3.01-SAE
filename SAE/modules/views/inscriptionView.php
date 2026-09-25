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
                <p>Pseudo:</p>
                <input name='form[pseudo]' type="text">
                <?php if (isset($bad_pseudo)) {
                    echo $bad_pseudo;} ?>
                
                <p>Prenom:</p>
                <input name='form[prenom]' type="text">
                <?php if (isset($bad_prenom)) {
                    echo $bad_prenom;} ?>
                
                <p>Nom:</p>
                <input name='form[nom]' type="text">
                <?php if (isset($bad_nom)) {
                    echo $bad_nom;} ?>
                
                <p>Email:</p>
                <input name='form[email]' type="text">  
                <?php if (isset($bad_email)) {
                    echo $bad_email;} ?>
                
                <p>Mot de passe:</p>
                <input name='form[mdp]' type="password">
                <p>Confirmation du mot de passe:</p>
                <input name='form[mdp2]' type="password">
                <?php if (isset($notMatch_password)) {
                    echo $notMatch_password;} ?>
                
                <!-- Phone number -->
                <p>Numéro de téléphone (optionel):</p>
                <input name='form[phone]' type="tel">

                <!-- Adress -->
                <p>Addresse:</p>
                <input name='form[adress]' type="text">
                <?php if (isset($bad_adress)) {
                    echo $bad_adress;} ?>

                <p>Conditions générales:</p>
                <input name='form[generalCondition]' type="checkbox">
                <?php if (isset($notAccepted_conditions)) {
                    echo $notAccepted_conditions;} ?>
                
                <input type="submit">
            </form>
        </div>
    </body>
    <footer>
        <p><?php end_page(); ?><p>
    </footer>
</html>