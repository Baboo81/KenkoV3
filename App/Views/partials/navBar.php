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
                                        <li class="nav-item mx-5">
                                            <a class="nav-link" aria-current="page" href="/foireAuxQuestions">FAQ</a>
                                        </li>
                                        <li class="nav-item dropdown text-center mx-5">
                                            <a href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="/assets/img/icons/user-icon.svg" alt="Img user" class="rounded-circle" width="50">
                                            </a>
                                            <ul class="dropdown-menu p-3" aria-labelledby="userMenu">
                                                <p class="fs-5 text-muted my-3 text-center">Compte utilisateur</p>
                                                <li>    
                                                    <a class="dropdown-item my-2" href="/settings">
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
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>