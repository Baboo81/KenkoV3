<?php

require_once '../vendor/autoload.php';

// Inclusion des classes nécessaires

use App\Controllers\ContactController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\KenkoHoController;
use App\Controllers\KenkoWebController;
use App\Controllers\QuiSuisJeController;


// Initialisation du routeur
$router = new Router();

// Définition des routes
$router->get('/', [HomeController::class, 'index']); // Page d'accueil
$router->get('/kenko-ho', [KenkoHoController::class, 'show']);
$router->get('/kenko-web', [KenkoWebController::class, 'show']);
$router->get('/quiSuis-je', [QuiSuisJeController::class, 'show']);
$router->get('/contact', [ContactController::class, 'show']);
$router->post('/contact', [ContactController::class, 'handleForm']);

// Lancer le routage
$router->run();


