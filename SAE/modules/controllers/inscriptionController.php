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
    
            if (
                isset($postData['form']['pseudo']) &&
                isset($postData['form']['prenom']) &&
                isset($postData['form']['nom']) &&
                isset($postData['form']['email']) &&
                isset($postData['form']['mdp']) &&
                isset($postData['form']['mdp2']))
                {
                // Vérification de la taille du pseudo / prenom / nom
                if (strlen($_POST['form']['pseudo']) > 20) {
                    $bad_pseudo = "<p class='error'>le pseudonyme doit être inférieur ou égale à 20 caractères</p>";
                } elseif (strlen($_POST['form']['pseudo']) == 0) {
                    $bad_pseudo = "<p class='error'>Veuillez entrer un pseudonyme</p>";
                }
                if (strlen($_POST['form']['prenom']) > 30) {
                    $bad_prenom = "<p class='error'>le prenom doit être inférieur ou égale à 30 caractères</p>";
                } elseif (strlen($_POST['form']['pseudo']) == 0) {
                    $bad_prenom = "<p class='error'>Veuillez entrer le prenom</p>";
                }
                if (strlen($_POST['form']['nom']) > 30) {
                    $bad_nom = "<p class='error'>le nom doit être inférieur ou égale à 30 caractères</p>";
                } elseif (strlen($_POST['form']['pseudo']) == 0) {
                    $bad_nom = "<p class='error'>Veuillez entrer le nom</p>";
                }
    
                // Vérification email
                if (!preg_match('/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/', $postData['form']['email'])) {
                    $bad_email = "<p class='error'>L'email est incorrect</p>";
                }
    
                // Vérification mdp
                if ($postData['form']['mdp'] !== $postData['form']['mdp2']) {
                    // Les deux mots de passe entrées ne sont pas exactement similaire
                    $notMatch_password = "<p class='error'>Le mot de passe entré est différent</p>";
                } elseif (strlen($_POST['form']['mdp']) == 0) {
                    $notMatch_password = "<p class='error'>Veuillez entrer un mot de passe</p>";
                }
    
                // Vérification Conditions générales
                if (!isset($postData['form']['generalCondition'])) {
                    // L'utilisateur n'a pas accepté les conditions d'utilisation
                    $notAccepted_conditions = "<p class='error'>Veuillez accepter les conditions d'utilisation</p>";
                }
    
                // Vérification globale
                if (!isset($bad_pseudo) && !isset($bad_prenom) && !isset($bad_nom) && !isset($bad_email) && !isset($notMatch_password) && !isset($notAccepted_conditions)) {
                    // On enregistre les données de l'utilisateur dans la BD
    
                    // On démarre la session
                    $_SESSION['suid'] = session_id();
                    $_SESSION['username'] = $postData['form']['pseudo'];
    
                    // On recharge la page pour aller sur authentification
                    header('Location: index.php?page=authentification');
                }
    
            }
        }
    
        // On affiche le formulaire d'authentification
        require_once 'modules/views/inscriptionView.php';
    }
}