<?php
// Ce script est le "routeur central", il connecte les scripts entre eux.

// On récupère les infos 
$page = $_POST['page'];
if ($page is null) {
    $page = 'login';
}

// Détection de la session fermée
if (!isset($_SESSION['uid'])) {
    $page = 'login';
}

// On redirige vers la bonne page
if ($page === 'login') {
    require 'SAE/controllers/loginController.php';
}