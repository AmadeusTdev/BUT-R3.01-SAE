<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/styles/_default.css">
        <link rel="stylesheet" href="assets/styles/_navigation.css">
        <link rel="stylesheet" href="assets/styles/forgottenPwdStyle.css">
        <?php startPage(); ?>
    </head>
    <body>
        <div id="main-container">
            <header>
                <?php navigation(); ?>
            </header>
    
            <div id="right-container">
                <main>
                    <div class="cont">
                        <h1>Mot de passe oublié</h1>
                        <?php if (!isset($success)) { ?>
                            <form method="post" class="form_bg" action="index.php?page=forgottenPwd">
                                <label for="email">Email :</label>
                                <input id="email" name="form[email]"
                           class="input" type="email"
                           placeholder="Adresse mail" required>
    
                                <label for="mdp">Nouveau mot de passe :</label>
                                <input id="mdp" name="form[mdp]" class="input" type="password" required>
    
                                <label for="mdp2">Confirmer le mot de passe :</label>
                                <input id="mdp2" name="form[mdp2]" class="input" type="password" required>
    
                                <input type="submit" class="submit" value="Modifier">
                            </form>
                            <?php
                            if (isset($error)) {
                                echo $error;
                            }
                            ?>
                        <?php } else { ?>
                            <?php echo $success; ?>
                            <a href="index.php?page=login" class="link">Se connecter</a>
                        <?php } ?>
                    </div>
                </main>
                <footer>
                    <?php endPage(); ?>
                </footer>
            </div>
        </div>
    </body>
</html>

