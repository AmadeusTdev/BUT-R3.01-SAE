
<?php

function start_page($title = 'Titre ici') {
    echo '<title>' . $title . '</title>';
}


function end_page() {
    echo '<footer><p>Fin de page ici</p></footer>';
}

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_assets/styles/authentificationStyle.css">
        <?php start_page('Accueil'); ?>
    </head>
    <body>
        <div>

    <header>
        <h1>Bienvenue sur notre site</h1>
        <nav>
            <a href="#">Accueil</a> | 
            <a href="#">Authentification</a> | 
            <a href="#">Inscription</a>
        </nav>
    </header>

    <main>
        <section>
            <h2>Espace d'accueil</h2>
            <p>Voici un site bien construit et bien codé.</p>
        </section>
    </main>

    <?php end_page(); ?>
    </div>
    </body>
    </html>
