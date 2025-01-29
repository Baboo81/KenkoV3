Kenko/
├── app/
│   ├── controllers/          # Les contrôleurs qui gèrent la logique de l'application
│   │   └── HomeController.php
│   │   └── KenkoHoController.php
│   │   └── KenkoWebController.php
│   ├── models/               # Les modèles pour la gestion des données
│   │   └── User.php
│   │   └── Service.php
│   ├── views/                # Les vues qui contiennent les fichiers HTML/PHP
│   │   ├── home.php
│   │   ├── kenko-ho.php
│   │   ├── kenko-web.php
│   ├── core/                 # Dossier contenant les fichiers principaux du framework MVC
│   │   ├── Router.php
│   │   ├── Controller.php
│   │   ├── Model.php
│   │   ├── View.php
│   └── config/               # Fichiers de configuration
│       ├── config.php
│       └── database.php
├── public/                   # Dossier contenant les fichiers accessibles publiquement
│   ├── index.php             # Point d'entrée de l'application
│   ├── assets/               # Fichiers publics comme images, CSS, JS
│   │   ├── img/
│   │   ├── css/
│   │   ├── js/
│   └── .htaccess             # Pour gérer les routes et la sécurité
├── storage/                  # Pour les fichiers générés (logs, sessions, uploads)
│   ├── logs/
│   └── uploads/
├── .gitignore                # Fichier gitignore pour ignorer les fichiers inutiles
├── composer.json             # Si tu utilises Composer (pour les dépendances PHP)
└── README.md                 # Documentation du projet
