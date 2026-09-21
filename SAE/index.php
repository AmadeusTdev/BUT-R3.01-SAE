<?php
// Ce script est le "routeur central", il connecte les scripts entre eux.
session_start();

require_once '_assets/includes/autoloader.php';

$page = 'accueil'; // Page par défaut

// On récupère les infos 
if (array_key_exists('page', $_GET)) {
    $page = $_GET['page'];
    
    if ($page == 'logout') {
        $_SESSION = array(); // On vide la variable superglobale session pour se déconnecter
        $page = 'authentification';
    }
}

// Détection de la session fermée
if (!isset($_SESSION['uid'])) {
    // $page = 'authentification'; // TODO: seulement rediriger vers auth si on était sur une page connecté
}

// On redirige vers le bon controller
if (file_exists('modules/controllers/' . $page . 'Controller.php')) {

    $path = 'modules\\controllers\\' . $page . 'Controller';
    $controller = new $path();
    $controller->execute();

} else {
    // Si la page n'existe pas on redirige vers l'accueil
    $path = 'modules\\controllers\\accueilController';
    $controller = new $path();
    $controller->execute();
}