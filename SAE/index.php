<?php
// Ce script est le "routeur central", il connecte les scripts entre eux.

// On récupère les infos 
if (array_key_exists('page', $_POST)) {
    $page = $_POST['page'];
} else {
    $page = 'acceuil'; // Si la page n'existe pas on redirige vers l'acceuil
}

// Détection de la session fermée
if (!isset($_SESSION['uid'])) {
    $page = 'authentification'; // TODO: seulement rediriger vers auth si on été sur une page connecté
}

// On redirige vers le bon controller
if (file_exists('modules/controllers/' . $page . 'Controller.php')) {
    require 'modules/controllers/' . $page . 'Controller.php';
    display();
}