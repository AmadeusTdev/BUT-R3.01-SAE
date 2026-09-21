



<?php
function start_page() {
    // Email = Chaine de caractères vide 
    echo '<title>Titre ici</title>';
}
function end_page() {
    echo '<p>Fin de page ici</p>';
}
?>




<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mot de passe oublié</title>
    </head>
    <body>
        <div>Mot de passe oublié</div>
        <form method="post">

      
        <?php if (!empty($message)): ?>
            <p class="alert"><?= $message ?></p>
        <?php endif; ?>
            <?php
                if (isset($er_mail)){
            ?>
                <div><?= $er_mail ?></div>
            <?php   
                }
            ?>
            <input type="email" placeholder="Adresse mail" name="mail" value="
            <?php if(isset($mail)){ echo $mail; }?>" required>
            <button type="submit" name="oublie">Envoyer</button>
        </form>
    </body>
</html>
