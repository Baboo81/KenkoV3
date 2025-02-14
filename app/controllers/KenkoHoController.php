<?php 


namespace App\Controllers;//Indique que ce controller fait partie de l'espace noms App\Controllers

use App\Core\Controller;
use App\Core\Database;
use PDO;
use PDOException;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
class KenkoHoController extends Controller {
    public function show() {
        
        //Défini le titre de la page
        $title = "KenkoHo - Bien-être & huiles essentielles";
        //Joindre les styles:
        $resetCss = 'reset.css';
        $css = 'kenkoHo.css'; 

        //Vérifie si un témoignage a été soumis
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $this->submitTestimonials();
        }

        //Récupérer les témoignages depuis la DB
        $testimonials = $this->getTestimonials();
       
        //Charge la vue et passer le titre
        $this->View('kenko-ho', compact('title', 'resetCss', 'css', 'testimonials'));
    }

    //Méthode pour récupérer les témoignages de la DB
    public function getTestimonials() {
       
        //Connexion à la DB
        $db = Database::getInstance();

        //Requête SQL pour récupérer les témoignages
        $sql = "SELECT * FROM testimonials ORDER BY created_at DESC"; //Tri des témoignages du plus récents au plus anciens

        //Préparer et exécuter la requête
        $stmt = $db->prepare($sql);
        $stmt->execute();

        //Récupérer les résultats sous forme de tableau associatif
        $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $testimonials; //Retourne les témoignages
    }

    //Méthode pour ajouter un témoignage
    public function submitTestimonials() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            var_dump($_POST);
           

            $db = Database::getInstance();

            //Récupération des données du form
            $name = htmlspecialchars($_POST['userName']);
            $rating = intval($_POST['rating']);
            $comment = htmlspecialchars($_POST['testimonialsMessage']);

            //Vérification des champs
            if (empty($name) || empty($rating) || empty($comment)) {
                $_SESSION['message'] = [
                    'type' => 'danger',
                    'text' => 'Tous les champs sont obligatoires !'
                ];
                header("Location: /kenko-ho");
                exit();
            }

            try {
                // Préparer l'insertion dans la DB
                $sql = "INSERT INTO testimonials (name, rating, comment) VALUES (:name, :rating, :comment)";
                $stmt = $db->prepare($sql);
    
                // Exécuter la requête
                $stmt->execute([
                    ':name' => $name,
                    ':rating' => $rating,
                    ':comment' => $comment
                ]);
    
                // Message de succès
                $_SESSION['message'] = [
                    'type' => 'success',
                    'text' => 'Merci pour votre témoignage !'
                ];
    
            } catch (PDOException $e) {
                // En cas d'erreur, afficher l'erreur SQL
                $_SESSION['message'] = [
                    'type' => 'danger',
                    'text' => 'Une erreur est survenue : ' . $e->getMessage()
                ];
            }
            //Redirection vers la page
            header("Location: /kenko-ho");
            exit();
        }
    }
}