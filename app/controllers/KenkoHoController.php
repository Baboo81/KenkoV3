<?php 

namespace App\Controllers;//Indique que ce controller fait partie de l'espace noms App\Controllers

use App\Core\Controller;
use App\Core\Database;
use PDO;

class KenkoHoController extends Controller {
    public function show() {
        
        //Défini le titre de la page
        $title = "KenkoHo - Bien-être & huiles essentielles";
        //Joindre les styles:
        $resetCss = 'reset.css';
        $css = 'kenkoHo.css'; 

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
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
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

            //Préparer l'insertion dans la DB
            $sql = "INSERT INTO testimonials (name, rating, comment, created_at) VALUES (:name, :rating, :comment, NOW())";
            $stmt = $db->prepare($sql);

            //Exècuter la requête
            if ($stmt->execute(['name' => $name,
                                'rating' => $rating,
                                'comment' => $comment])) {

                $_SESSION['message'] = [
                    'type' => 'succes',
                    'text' => 'Merci pour votre témoignage !'
                ];             
            } else {
                $_SESSION['message'] = [
                    'type' => 'Échec',
                    'text' => 'Une erreur est survenue ! Veuillez réessayer !'
                ];
            }

            //Redirection vers la page
            header("Location: /kenko-ho");
            exit();
        }
    }
}