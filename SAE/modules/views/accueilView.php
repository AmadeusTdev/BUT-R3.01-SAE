<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_assets/styles/authentificationStyle.css">
        <?php start_page(); ?>
    </head>
    <body>
        <div>
            <header>
                <?php navigation(); ?>
                <h1>Bienvenue sur notre site</h1>
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
                <?php end_page(); ?>
            </footer>
        </div>
    </body>
</html>



