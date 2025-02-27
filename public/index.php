<?php

session_start();//Démarrer la session

require_once '../vendor/autoload.php';
//require_once __DIR__ . '/../App/config/config.php';

// Inclusion des classes nécessaires

use App\Controllers\ContactController;
use App\Controllers\CookieController;
use App\Controllers\CookiePreferencesController;
use App\Controllers\FoireAuxQuestionsController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\KenkoHoController;
use App\Controllers\KenkoHoThemes\CuisineController;
use App\Controllers\KenkoHoThemes\DixHuilesDeBaseController;
use App\Controllers\KenkoHoThemes\EmotionController;
use App\Controllers\KenkoHoThemes\EnfantsController;
use App\Controllers\KenkoHoThemes\MicrobiomeController;
use App\Controllers\KenkoHoThemes\PeauController;
use App\Controllers\KenkoHoThemes\SommeilController;
use App\Controllers\KenkoWebController;
use App\Controllers\LoginController;
use App\Controllers\LogoutController;
use App\Controllers\PolitiquesCookiesController;
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
$router->get('/kenko-ho-themes/microbiome', [MicrobiomeController::class, 'show']);
$router->get('/foireAuxQuestions', [FoireAuxQuestionsController::class, 'show']);

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

//Routes pour la gestion des cookies
$router->get('/cookies/politiquesCookies', [PolitiquesCookiesController::class, 'show']);
$router->get('/cookies/cookie-preferences', [CookiePreferencesController::class, 'show']);
$router->get('/partials/cookie-banner', [CookieController::class, 'showBanner']);

// Lancer le routage
$router->run();


