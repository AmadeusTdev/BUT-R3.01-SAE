<?php
function start_page(): void {
    echo '<title>Qui est-ce?</title>';
}
function end_page(): void {
    echo '<p>Fin de page ici</p>';
}

function navigation(): void {
    echo <<<HTML
        <nav>
            <a href="index.php?page=accueil">Accueil</a> |
            <a href="index.php?page=authentification">Authentification</a> |
            <a href="index.php?page=inscription">Inscription</a>
        </nav>
    HTML;
}

