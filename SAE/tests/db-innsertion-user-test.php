<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../noyau/model.php';
require_once __DIR__ . '/../modules/models/inscriptionModel.php';

try {
    echo "test d'insertion\n";

    $reussite = InscriptionModel::register(
        'jambon beurre',
        'Jean',
        'Boris',
        'jambonbon.salami@test.fr',
        '3petitcochon',
        '0601020304',
        '10 rue de la boucherie'
        
        
    );

    if ($reussite) {
        echo "[SUCCÈS] Utilisateur inséré \n";
    }
} catch (PDOException $e) {
    echo "[ERREUR SQL] echec de l'insertion : " . $e->getMessage() . "\n";
}