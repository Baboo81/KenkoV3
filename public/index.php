<?php

require_once '../vendor/autoload.php';

// Inclusion des classes nécessaires

use App\Controllers\ContactController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\KenkoHoController;
use App\Controllers\KenkoHoThemes\CuisineController;
use App\Controllers\KenkoHoThemes\DixHuilesDeBaseController;
use App\Controllers\KenkoHoThemes\EmotionController;
use App\Controllers\KenkoWebController;
use App\Controllers\QuiSuisJeController;
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

//Formulaire contact
$router->post('/contact', [ContactController::class, 'handleForm']);
$router->get('/message', [ContactController::class, 'listMessages']);

//Formulaire s'inscrire
$router->get('/signup', [SignupController::class, 'show']);

// Lancer le routage
$router->run();


