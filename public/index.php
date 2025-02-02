<?php

require_once '../vendor/autoload.php';

// Inclusion des classes nécessaires

use App\Controllers\ContactController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\KenkoHoController;
use App\Controllers\KenkoWebController;
use App\Controllers\MessageController;
use App\Controllers\QuiSuisJeController;


// Initialisation du routeur
$router = new Router();

// Définition des routes
$router->get('/', [HomeController::class, 'index']); // Page d'accueil
$router->get('/kenko-ho', [KenkoHoController::class, 'show']);
$router->get('/kenko-web', [KenkoWebController::class, 'show']);
$router->get('/quiSuis-je', [QuiSuisJeController::class, 'show']);
$router->get('/contact', [ContactController::class, 'show']);
//Formulaire
$router->post('/contact', [ContactController::class, 'handleForm']);
$router->get('/message', [ContactController::class, 'listMessages']);
$router->get('/message', [MessageController::class, 'showMessages']);

// Lancer le routage
$router->run();


