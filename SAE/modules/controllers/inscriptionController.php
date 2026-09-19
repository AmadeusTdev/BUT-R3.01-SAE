<?php
namespace modules\controllers;

class inscriptionController {
    public function execute() {
        // On vérifie le contenu du formulaire d'inscription (si on est pas déjà connecté)
        if (isset($_POST['form']) && !isset($_SESSION['uid'])) {
            // On filtre les entrées pour éviter les injections SQL
            $args = [
                'form' => [
                    'filter' => FILTER_DEFAULT,
                    'flags'  => FILTER_REQUIRE_ARRAY,
                ]
            ];
            $postData = filter_input_array(INPUT_POST, $args);
    
            if (isset($postData['form']['id']) && isset($postData['form']['email']) && isset($postData['form']['mdp']) && isset($postData['form']['mdp2']) && isset($postData['form']['generalCondition'])) {
                $correct = true;
                // Vérification de la taille du login
                if (strlen($_POST['form']['id']) > 50) {
                    $correct = false;
                }
    
                // Vérification email
    
                // Vérification mdp
    
                // Vérification Conditions générales
    
                // Vérification globale
                if ($correct === true) {
                    // On enregistre les données de l'utilisateur dans la BD
    
                    // On démarre la session
                    session_start();
                    $_SESSION['suid'] = session_id();
    
                    // On recharge la page pour aller sur authentification
                    header('Location: index.php?page=authentification');
                }
    
            }
        }
    
        // On affiche le formulaire d'authentification
        require_once 'modules/views/inscriptionView.php';
    }
}