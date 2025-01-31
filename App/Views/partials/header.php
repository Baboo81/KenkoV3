<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Leaflet CSS-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />   
        <!-- Library CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="/assets/css/<?= $resetCss ?>" rel="stylesheet">
        <link href="/assets/css/<?= $css ?>" rel="stylesheet">
        <!-- Library Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="/assets/script/main.js" defer></script>
        <title><?= $title; ?></title>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg fixed-top">
                        <div class="container-fluid">
                            <img src="/assets/img/svg/logo.svg" alt="Logo du site" id="logo">
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
                                        <a class="nav-link" aria-current="page" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>