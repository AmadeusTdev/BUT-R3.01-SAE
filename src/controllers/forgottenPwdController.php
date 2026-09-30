<?php
namespace src\controllers;

class forgottenPwdController {
    public function execute() : void {
        // On regarde si l'utilisateur n'est pas connecté et si il a envoyé un formulaire
        if (isset($_POST['form_email']) && !isset($_SESSION['suid'])) {
            // On filtre les mauvaises entrées
            if (filter_input(INPUT_POST, "form_email")) {
                // On verifie si l'email entrée à le bon format
                if (preg_match('/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/', $_POST['form_email'])) {
                    // On vérifie si l'email existe dans la BD
                    $emailExist = false;

                    if ($emailExist === true) {
                        // Envoie d'un email
                        
                    } else {
                        $bad_email = "<p class='error'>Email non existant</p>";
                    }
                } else {
                    $bad_email = "<p class='error'>Format entré incorrect</p>";
                }
            }
        }
        // On affiche la vue de mot de passe oublié
        require_once __DIR__ . '/../views/forgottenPwdView.php';
    }
}