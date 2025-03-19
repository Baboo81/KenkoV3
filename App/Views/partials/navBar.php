<?php
    $currentPage = basename($_SERVER['PHP_SELF'], ".php"); //Récupère le nom de la page san l'extension .php
?>
 
 <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg fixed-top">
                        <div class="container-fluid d-flex align-items-center justify-content-between">
                            <!--  Logo  -->
                            <a class="navbar-brand" href="/">
                                <img src="/assets/img/logo/logoBc.svg" alt="Logo du site" id="logo">
                            </a>
                            <!--  Btn pour mobile -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Menu principal -->
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($currentPage == '' || $currentPage == 'index') ? 'active' : '' ?>"  href="/">Accueil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($currentPage == 'kenko-ho') ? 'active' : '' ?>"  href="/kenko-ho">Kenko-Ho</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($currentPage == 'kenko-web') ? 'active' : '' ?>" href="/kenko-web">Kenko-Web</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($currentPage == 'quiSuis-je') ? 'active' : '' ?>" aria-current="page" href="/quiSuis-je">Qui suis-je ?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($currentPage == 'contact') ? 'active' : '' ?>" aria-current="page" href="/contact">Contact</a>
                                    </li>
                                </ul>
                                <!-- Menu utilisateur -->
                                    <ul class="navbar-nav">
                                        <?php if (!isset($_SESSION['user'])): ?>   
                                            <li class="nav-item">                                    
                                                <a class="nav-link <?= ($currentPage == 'signup') ? 'active' : '' ?>" href="/signup">S'inscrire</a>
                                            </li>
                                        <?php endif; ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($currentPage == 'foireAuxQuestions') ? 'active' : '' ?>" aria-current="page" href="/foireAuxQuestions">FAQ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="/assets/img/icons/user-icon.svg" alt="Img user" class="rounded-circle" width="50">
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="userMenu">
                                                <p class="fs-5 text-muted my-3 text-center">Compte utilisateur</p>
                                                <li>    
                                                    <a class="dropdown-item" href="/settings">
                                                        <i class="bi bi-gear"></i>&nbsp;Paramètres
                                                    </a>
                                                </li>
                                                <?php if (!isset($_SESSION['user'])): ?>
                                                    <li>
                                                        <a class="dropdown-item" href="/login">
                                                            <i class="bi bi-box-arrow-in-right"></i>&nbsp;Se connecter
                                                        </a>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <a class="dropdown-item" href="/logout">
                                                            <i class="bi bi-box-arrow-right"></i>&nbsp;Se déconnecter
                                                        </a>
                                                    </li>
                                                    <!-- Afficher le nom du user connecté  -->
                                                    <li class="dropdown-item">
                                                        <i class="bi bi-person-circle"></i><p class="user-name"><?= $_SESSION['user'] ?></p>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>