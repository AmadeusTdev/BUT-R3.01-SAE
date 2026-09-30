<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/styles/forgottenPwdStyle.css">
        <?php start_page(); ?>
    </head>
    <body>
        <header>
            <?php navigation(); ?>
        </header>
        <h1>Mot de passe oublié</h1>
        <form method="post" action="index.php?page=forgottenPwd">

            <input type="email" placeholder="Adresse mail" name="form_email" value="
            <?php if(isset($mail)){ echo $mail; }?>" required>
            <button type="submit" name="oublie">Envoyer</button>
            <?php if (isset($bad_email)) {
                echo $bad_email;
            } ?>
        </form>
    </body>
    <footer>
        <p><?php end_page(); ?><p>
    </footer>
</html>
