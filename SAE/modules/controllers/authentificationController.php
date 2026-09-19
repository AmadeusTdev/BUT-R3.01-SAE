<?php
namespace modules\controllers;

class authentificationController {
    public function execute() {
        // On vérifie le contenu du formulaire d'authentification (si on est pas déjà connecté)
        if (isset($_POST['form']) && !isset($_SESSION['suid'])) {
            // On filtre les entrées pour éviter les injections SQL
            $args = [
                'form' => [
                    'filter' => FILTER_DEFAULT,
                    'flags'  => FILTER_REQUIRE_ARRAY,
                ]
            ];
            $postData = filter_input_array(INPUT_POST, $args);

            if (isset($postData['form']['id']) && isset($postData['form']['mdp'])) {
                // On demande à la base de données les informations de l'utilisateur
                require 'modules/models/authentificationModel.php';
                $mdp = '';

                // On vérifie si les informations sont correctes
                $hash = password_hash($postData['form']['mdp'], PASSWORD_DEFAULT);

                if ($mdp = $hash) {
                    // Informations correctes, on crée la session
                    session_start();
                    $_SESSION['suid'] = session_id();
                    $_SESSION['username'] = $postData['form']['id'];

                    // On recharge la page
                    header('Location: index.php?page=authentification');
                } else {
                    // Informations invalides
                }
            }
        }

        // On affiche le formulaire d'authentification
        require_once 'modules/views/authentificationView.php';
    }
}