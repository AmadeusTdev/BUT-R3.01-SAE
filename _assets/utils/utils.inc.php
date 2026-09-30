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
            <a href="index.php?page=home">Accueil</a> |
            <a href="index.php?page=login">Authentification</a> |
            <a href="index.php?page=signUp">Inscription</a> |
            <a href="index.php?page=forgottenPwd">Mot de passe oublié</a>
        </nav>
    HTML;
}

