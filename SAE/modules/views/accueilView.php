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
        <a href="index.php?page=accueil">Accueil</a> |
        <a href="index.php?page=authentification">Authentification</a> |
        <a href="index.php?page=inscription">Inscription</a>
    </nav>
</header>


<main>
    <section class="site">
        <h2>Espace d'accueil</h2>
        <p>Découvrez notre Site!</p>
        <div class="site-buttons">
        </div>
    </section>




    <section class="features">
        <h3>Pourquoi nous rejoindre ?</h3>
        <div class="cards-container">
            <?php foreach ($features as $feature): ?>
                <article class="card">
                    <h4><?= $feature['title'] ?></h4>
                    <p><?= $feature['description'] ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>


<footer>
    <p>&copy; <?= date('Y') ?> - Tous droits réservés.</p>
</footer>


    <?php end_page(); ?>
    </div>
    </body>
    </html>



