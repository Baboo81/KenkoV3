<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--  Link Favicon -->
        <link rel="icon" type="image/svg" href="/assets/img/logo/logo.svg">
        <!-- Leaflet CSS-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />   
        <!-- Library CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="/assets/css/<?= $resetCss ?>" rel="stylesheet">
        <link href="/assets/css/<?= $css ?>" rel="stylesheet">
        <!-- Library Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="/assets/js/main.js" defer></script>
        <title><?= $title; ?></title>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg fixed-top">
                        <div class="container-fluid">
                            <img src="/assets/img/logo/logo.svg" alt="Logo du site" id="logo">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mb-lg-0">
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" aria-current="page" href="/">Accueil</a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" aria-current="page" href="/kenko-ho">Kenko-Ho</a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" href="/kenko-web">Kenko-Web</a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" aria-current="page" href="/quiSuis-je">Qui suis-je ?</a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" aria-current="page" href="/contact">Contact</a>
                                    </li>
                                    <ul class="navbar-nav">
                                        <?php if (!isset($_SESSION['user'])): ?>   
                                            <li class="nav-item mx-3">                                    
                                                <a class="nav-link" href="/signup">S'inscrire</a>
                                            </li>
                                        <?php endif; ?>
                                        <li class="nav-item dropdown text-center mx-3">
                                            <a href="#" class="nav-link" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="/assets/img/icons/user-icon.svg" alt="Img user" class="rounded-circle" width="40">
                                            </a>
                                            <ul class="dropdown-menu p-3" aria-labelledby="userMenu">
                                                <li>    
                                                    <a class="dropdown-item" href="/settings">Paramètres</a>
                                                </li>
                                                <?php if (!isset($_SESSION['user'])): ?>
                                                    <li>
                                                        <a class="dropdown-item" href="/login">Se connecter</a>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <a class="dropdown-item" href="/logout">Se déconnecter</a>
                                                    </li>
                                                    <!-- Afficher le nom du user connecté  -->
                                                    <li class="dropdown-item">
                                                        <p class="user-name"><?= $_SESSION['user'] ?></p>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>