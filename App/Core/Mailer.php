<?php

namespace App\Core;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';

class Mailer {
    public static function sendMail($to, $subject, $htmlBody, $replyTo = null) {
        $mail = new PHPMailer(true);

        try {
            // Configuration SMTP Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'magicbaboo@gmail.com'; // Ton adresse Gmail
            $mail->Password = 'xxxxx'; // Ton mot de passe ou mot de passe d’application Gmail
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('magicbaboo@gmail.com', 'Kenko');
            $mail->addAddress($to);

            if ($replyTo) {
                $mail->addReplyTo($replyTo);
            }

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $htmlBody;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
