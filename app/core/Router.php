<?php

namespace App\Core;

class Router {
    private $routes = [];

    // Ajout d'une route
    public function get($path, $controllerAction) {
        $this->routes['GET'][$this->normalizeUri($path)] = $controllerAction;
    }

    // Lancer le routage
    public function run() {
        $method = $_SERVER['REQUEST_METHOD'];  // Récupérer la méthode HTTP (GET, POST, etc.)
        $uri = $this->normalizeUri($_SERVER['REQUEST_URI']);  // Normaliser l'URI

        if (isset($this->routes[$method][$uri])) {
            $controllerAction = $this->routes[$method][$uri];
            $this->callAction($controllerAction);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }

    // Normalisation de l'URI (supprime les / en trop et nettoie les paramètres)
    private function normalizeUri($uri) {
        $uri = parse_url($uri, PHP_URL_PATH); // Enlève les paramètres éventuels (ex: ?id=1)
        return trim($uri, '/'); // Supprime les / en trop
    }

    // Appel du contrôleur et de l'action
    private function callAction($controllerAction) {
        list($controller, $action) = $controllerAction;
        
        // Vérifier que le contrôleur existe avant de l'instancier
        if (!class_exists($controller)) {
            die("Erreur : Contrôleur $controller non trouvé");
        }
    
        $controllerInstance = new $controller(); // Instancier le contrôleur
        if (!method_exists($controllerInstance, $action)) {
            die("Erreur : Méthode $action introuvable dans $controller");
        }
        
        $controllerInstance->$action(); // Appeler l'action
    }

    public function post($url, $action) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === $url) {
            $this->callAction($action);
        }
    }
}
