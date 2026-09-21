
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
        <link rel="stylesheet" href="_assets/styles/mapViewStyle.css">
        <?php start_page('Plan du site'); ?>
    </head>
    <body>
        <div>
<header>


<main>
    <section class="sitemap-container">
        <h2>Plan du site</h2>
        <p>Retrouvez ci-dessous l'ensemble des pages accessibles sur notre site :</p>

        <ul class="sitemap-list">
            <?php foreach ($pages as $page): ?>
                <li>
                    <a href="<?= $page['url'] ?>"><?= $page['title'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>

<footer>
    <p>&copy; <?= date('Y') ?> - Tous droits réservés.</p>
</footer>
