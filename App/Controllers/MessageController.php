<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;

class MessageController extends Controller {

    public function showMessages() {
         //Se connecter à la BD
        $db  = Database::getInstance();

        //Récupèrer les msg de la db
        $stmt = $db->query("SELECT * FROM contacts ORDER BY created_at DESC");
        $message = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Définir les variables pour la vue
        $title = "Messages reçus";
        $resetCss = 'reset.css';
        $css = 'message.css';

        //Charger la vue en lui passant ceci
        $this->View('message', compact('title', 'resetCss', 'css', 'message'));
    }
   


}