<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Nouveau message Kenko</title>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px; }
            .container { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
            .label { font-weight: bold; margin-top: 10px; }
            .message { white-space: pre-wrap; margin-top: 10px; }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>💌 Nouveau message reçu via Kenko</h2>
            <p><span class="label">Nom :</span> <?= htmlspecialchars($nom) ?></p>
            <p><span class="label">Prénom :</span> <?= htmlspecialchars($prenom) ?></p>
            <p><span class="label">Téléphone :</span> <?= htmlspecialchars($tel) ?></p>
            <p><span class="label">Email :</span> <?= htmlspecialchars($email) ?></p>
            <div class="label">Message :</div>
            <div class="message"><?= nl2br(htmlspecialchars($message)) ?></div>
        </div>
    </body>
</html>
