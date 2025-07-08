<?php

namespace App\Core;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';

class Mailer {
    public static function sendMail($to, $subject, $htmlBody, $replyTo = null) {
        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 5; // ou 3 pour plus de détails
        $mail->Debugoutput = 'html';

        try {
            // Configuration SMTP Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'magicbaboo@gmail.com'; // Ton adresse Gmail
            $mail->Password = 'yridntrmkzqwpqwz'; // Ton mot de passe ou mot de passe d’application Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
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
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit; 
        }
    }
}
