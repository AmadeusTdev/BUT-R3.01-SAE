<?php
// On enregistre une fonction anonyme
spl_autoload_register(function ($class) {

    // 1. On retire le préfixe "modules\"
    $relativeClass = str_replace('modules\\', '', $class);
    // $relativeClass devient : "Controllers\AccueilController"

    // 2. On construit le chemin absolu vers le dossier modules/
    // __DIR__ représente le dossier où se trouve l'autoloader (_assets/includes/)
    $file = __DIR__ . '/../../modules/' . str_replace('\\', '/', $relativeClass) . '.php';
    // $file devient : /chemin/vers/projet/modules/Controllers/AccueilController.php

    // 3. Si le fichier existe, on l'inclut
    if (file_exists($file)) {
        require_once $file;
    }
});