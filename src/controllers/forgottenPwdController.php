<?php
namespace src\controllers;

class forgottenPwdController {
    public function execute() : void {
        $error = null;
        $success = null;

        // On regarde si l'utilisateur n'est pas connecté et si il a envoyé un formulaire
        if (isset($_POST['form']) && !isset($_SESSION['suid'])) {
            // On filtre les entrées
            $args = [
                'form' => [
                    'filter' => FILTER_DEFAULT,
                    'flags'  => FILTER_REQUIRE_ARRAY,
                ]
            ];
            $postData = filter_input_array(INPUT_POST, $args);

            if (isset($postData['form']['email']) && isset($postData['form']['mdp']) && isset($postData['form']['mdp2'])) {

                // Vérification du format de l'email
                if (!preg_match('/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/', $postData['form']['email'])) {
                    $error = "<p class='error'>Format d'email incorrect</p>";
                }

                // Vérification que les deux mots de passe correspondent
                if ($error === null && $postData['form']['mdp'] !== $postData['form']['mdp2']) {
                    $error = "<p class='error'>Les deux mots de passe ne correspondent pas</p>";
                }

                // Vérification que le mot de passe n'est pas vide
                if ($error === null && strlen($postData['form']['mdp']) == 0) {
                    $error = "<p class='error'>Veuillez entrer un mot de passe</p>";
                }

                // Si pas d'erreur, on verifie l'email en base et on maj le mdp
                if ($error === null) {
                    // On reutilise emailExists() de SignUpModel
                    require_once __DIR__ . '/../models/signUpModel.php';
                    require_once __DIR__ . '/../models/forgottenPwdModel.php';

                    if (!\SignUpModel::emailExists($postData['form']['email'])) {
                        $error = "<p class='error'>Aucun compte associé à cet email</p>";
                    } else {
                        // On hache le nouveau mot de passe
                        $hash = password_hash($postData['form']['mdp'], PASSWORD_DEFAULT);

                        // On met à jour la base
                        $reussite = \ForgottenPwdModel::updatePassword($postData['form']['email'], $hash);

                        if ($reussite) {
                            $success = "<p class='success'>Mot de passe modifié avec succès</p>";
                        } else {
                            $error = "<p class='error'>Une erreur est survenue, veuillez réessayer</p>";
                        }
                    }
                }
            }
        }

        // On affiche la vue de mot de passe oublié
        require_once __DIR__ . '/../views/forgottenPwdView.php';
    }
}
