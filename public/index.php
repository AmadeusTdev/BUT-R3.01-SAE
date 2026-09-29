<?php
// Ce script est le "routeur central", il connecte les scripts entre eux.
session_start();

require_once __DIR__ . '/../_assets/utils/utils.inc.php';
require_once __DIR__ . '/../_assets/includes/autoloader.php';

$page = 'home'; // Page par défaut

// On récupère les infos 
if (array_key_exists('page', $_GET)) {
    $page = $_GET['page'];
    
    if ($page == 'logout') {
        $_SESSION = array(); // On vide la variable superglobale session pour se déconnecter
        $page = 'login'; // On redirige vers la page de login
    }
}

// Détection de la session fermée
if (!isset($_SESSION['uid'])) {
    // $page = 'login'; // TODO: seulement rediriger vers auth si on était sur une page connecté
}



// On redirige vers le bon controller

if (file_exists(__DIR__ . '/../modules/controllers/' . $page . 'Controller.php')) {

    $path = 'modules\\controllers\\' . $page . 'Controller';
    $controller = new $path();
    $controller->execute();

} else {
    // Si la page n'existe pas on redirige vers l'accueil
    $path = 'modules\\controllers\\homeController';
    $controller = new $path();
    $controller->execute();
}
