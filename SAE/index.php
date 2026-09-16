<?php
// Ce script est le "routeur central", il connecte les scripts entre eux.

// On récupère les infos 
if (array_key_exists('page', $_POST)) {
    $page = $_POST['page'];
} else {
    $page = 'login';
}

// Détection de la session fermée
if (!isset($_SESSION['uid'])) {
    $page = 'login';
}

// On redirige vers la bonne page
if ($page === 'login') {
    require 'controllers/loginController.php';
    display_login();
}