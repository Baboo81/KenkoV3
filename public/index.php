<?php

session_start();//Démarrer la session

require_once '../vendor/autoload.php';

// Inclusion des classes nécessaires

use App\Controllers\ContactController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\KenkoHoController;
use App\Controllers\KenkoHoThemes\CuisineController;
use App\Controllers\KenkoHoThemes\DixHuilesDeBaseController;
use App\Controllers\KenkoHoThemes\EmotionController;
use App\Controllers\KenkoHoThemes\EnfantsController;
use App\Controllers\KenkoHoThemes\PeauController;
use App\Controllers\KenkoHoThemes\SommeilController;
use App\Controllers\KenkoHoThemes\StressController;
use App\Controllers\KenkoWebController;
use App\Controllers\LoginController;
use App\Controllers\LogoutController;
use App\Controllers\QuiSuisJeController;
use App\Controllers\SettingsController;
use App\Controllers\SignupController;

// Initialisation du routeur
$router = new Router();

// Définition des routes
$router->get('/', [HomeController::class, 'index']); // Page d'accueil
$router->get('/kenko-ho', [KenkoHoController::class, 'show']);
$router->get('/kenko-web', [KenkoWebController::class, 'show']);
$router->get('/quiSuis-je', [QuiSuisJeController::class, 'show']);
$router->get('/contact', [ContactController::class, 'show']);
$router->get('/kenko-ho-themes/cuisine', [CuisineController::class, 'show']);
$router->get('/kenko-ho-themes/dix-huiles-de-base', [DixHuilesDeBaseController::class, 'show']);
$router->get('/kenko-ho-themes/emotions', [EmotionController::class, 'show']);
$router->get('/kenko-ho-themes/sommeil', [SommeilController::class, 'show']);
$router->get('/kenko-ho-themes/enfants', [EnfantsController::class, 'show']);
$router->get('/kenko-ho-themes/peau', [PeauController::class, 'show']);
$router->get('/kenko-ho-themes/stress', [StressController::class, 'show']);

//Formulaire contact
$router->post('/contact', [ContactController::class, 'handleForm']);
$router->get('/message', [ContactController::class, 'listMessages']);

//Formulaire s'inscrire
$router->get('/signup', [SignupController::class, 'show']);
$router->post('/signup', [SignupController::class, 'register']);

//Routes pour la page de connexion
$router->get('/login', [LoginController::class, 'show']);
$router->post('/login', [LoginController::class, 'authenticate']);

//Routes pour la déconnexion
$router->get('/logout', [LogoutController::class, 'logout']);

//Routes pour les paramètres
$router->get('/settings', [SettingsController::class, 'show']);
$router->post('/settings', [SettingsController::class, 'settings']);

//Routes pour les témoignages
$router->get('/kenko-ho/testimonials', [KenkoHoController::class, 'getTestimonials']);
$router->post('/kenko-ho/testimonials', [KenkoHoController::class, 'submitTestimonials']);

// Lancer le routage
$router->run();


