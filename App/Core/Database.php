<?php

namespace App\Core;

use PDO;//Classe qui permet de se connecter une BD

use PDOException;//Est utilisée pour attraper les erreurs de connexions

class Database {
    private static $instance = null;//$instance va servir à stocker l'instance de la connexion

    private $pdo;//$pdo stockera l'objet : PDO

    private function __construct()
    {
        $config = require __DIR__ . '/../config/database.php';

        try {
            $this->pdo = new PDO(
                "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8",
                $config['user'],
                $config['password'],
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            die("Erreur de connexion :" . $e->getMessage());
        }
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->pdo;
    }
}