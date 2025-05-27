<?php

namespace App\Controllers;

use App\Core\Controller;

class ForgotPasswordController extends Controller {
    public function show() {

        //Défini le titre de la page
        $title = "Mot de passe oublié ?";
        //Joindre les styles:
        $resetCss = 'reset.css';
        $css = 'forgotPassword.css';

        //Charge le vue et passe le titre, css
        $this->View('forgot-password', compact('title', 'resetCss', 'css'));
    }

    public function send() {
        //Méthode qui sera appelée lorsque le form "Mot de passe oublié" sera soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

            if ($email) {
                //Simulation d'un token provisoire
                $token = bin2hex(random_bytes(32));

                //Construction du lien de réinitialisation
                $resetLink = "http://localhost:8000/reset-password?token=$token";

                //Contenu de l'email que recevra l'internaute
                $subject = "Réinitialisation de votre mot de passe";
                $message = "
                <html>
                    <head>
                        <title>Réinitialisation du mot de passe</title>
                    </head>
                    <body>
                        <article>
                            <p>Bonjour, voici la marche à suivre pour réinitialiser votre mot de passe :</p>
                            <p>Pour réinitialiser votre mot de passe, cliquez sur le lien ci-dessous :</p>
                            <p>
                                <a href='$resetLink'>$resetLink</a>
                            </p>
                            <p>Ce lien restera valable durant 1heure !</p>
                        </article>
                    </body>
                </html>
                ";

                //Headers 
                $headers = "MIME-Version: 1.0/r/n";
                $headers .= "Content-type:text/html;charset=UTF-8\r\n";
                $headers .= "From: support@kenko.local\r\n";

                //Envoi de l'email
                mail($email, $subject, $message, $headers);

            }

            if ($email) {
                header('Location: /forgot-password?success=1');
                exit;
            } else {
                header('Location: /forgot-password,error=1');
                exit;
            }
        }
    }
}