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
        <link href="/assets/style/reset.css" rel="stylesheet">
        <link href="/assets/style/kenkoHo.css" rel="stylesheet">
        <!-- Library Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="/assets/script/main.js" defer></script>
        <title>Kenko-ho</title>
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
                                        <a class="nav-link" aria-current="page" href="/index.html">Accueil</a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" aria-current="page" href="./kenko-ho.html">Kenko-Ho</a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" href="./kenko-web.html">Kenko-Web</a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" aria-current="page" href="./quiSuis-je.html">Qui suis-je ?</a>
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
        <main>
            <section class="sections home text-center">
                <div class="overlay">
                    <div class="container">
                        <div class="homeContent">
                            <h1 class="homeTitle p-5">Kenko-Ho</h1>
                            <p class="homeDesc p-5">Retrouvez la voie de l'équilibre grâce aux huiles essentielles et au Reiki</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mainSection">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 position-relative">
                            <img src="/assets/img/jpeg/Kenko-Ho/dōTERRAConsLogo.svg" alt="Logo de conséillère dōTERRA" class="doTERRA position-absolute top-50 my-5">
                        </div>
                        <div class="mainTitleContent mb-5">
                            <h2 class="mainSectionTitle text-muted text-center p-5">Que vous propose votre conséillère dōTERRA ?</h2>
                            <div class="line"><span></span></div>
                        </div>
                        <article class="col-md-12">
                            <div class="box rounded-5 p-4">
                                <p class="text-muted">Grâce à votre adhésion à dōTERRA vous bénéficierez d'une ristourne de 25% sur les produits ainsi que d'un suivi personnalisé.<br />Ce suivi va vous permettre d'apprendre à utiliser et connaître les différentes huiles essentielles en toute simplicité, je serai là pour vous donner toutes les informations nécessaire ainsi que des astuces qui vous guiderons sur la voie de l'autonomie et du bien-être.<br />Avec le Reiki je pourrais équilibrer la sphère énergétique de votre être, le reiki est un art de soigner mais aussi une philosophie de vie qui a vu le jour au Japon à la fin du XIX e siècle.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button  class="button">Les 10 huiles de bases</button>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="sliderSection">
                            <div class="container">
                                <div class="row">
                                    <!-- Slider doTERRA  -->
                                    <div class="col-md-12 sliderContent">
                                        <div class="slide">
                                            <div class="item box1">
                                                <div class="content">
                                                    <div class="name">Spider1</div>
                                                    <div class="description">Dorem ipsum dolor sit amet consectetur.</div>
                                                    <button type="button" class="btn btn-outline-light">See more</button>
                                                </div>
                                            </div>
                                            <div class="item box2">
                                                <div class="content">
                                                    <div class="name">Spider2</div>
                                                    <div class="description">Lorem ipsum dolor sit amet consectetur.</div>
                                                    <button type="button" class="btn btn-outline-light">See more</button>
                                                </div>
                                            </div>
                                            <div class="item box3">
                                                <div class="content">
                                                    <div class="name">Reiki</div>
                                                    <div class="description">Lorem ipsum dolor sit amet consectetur.</div>
                                                    <button type="button" class="btn btn-outline-light">See more</button>
                                                </div>
                                            </div>
                                            <div class="item box4">
                                                <div class="content">
                                                    <div class="name">Reiki</div>
                                                    <div class="description">Lorem ipsum dolor sit amet consectetur.</div>
                                                    <button type="button" class="btn btn-outline-light">See more</button>
                                                </div>
                                            </div>
                                            <div class="item box5">
                                                <div class="content">
                                                    <div class="name">Reiki</div>
                                                    <div class="description">Lorem ipsum dolor sit amet consectetur.</div>
                                                    <button type="button" class="btn btn-outline-light">See more</button>
                                                </div>
                                            </div>
                                            <div class="item box6">
                                                <div class="content">
                                                    <div class="name">Reiki</div>
                                                    <div class="description">Lorem ipsum dolor sit amet consectetur.</div>
                                                    <button type="button" class="btn btn-outline-light">See more</button>
                                                </div>
                                            </div>
                                        </div>  
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>
                                    </div>
                                    <!-- Slider doTERRA END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="text-center text-lg-start fontBlack py-5">
            <section class="">
              <div class="container text-center text-md-start mt-5" id="containerFooter">
                <div class="row mt-3">
                  <div class="col-md-2 col-lg-4 col-xl-3 mx-auto mb-4">
                    <p class="text-uppercase text-center fw-bold mb-4">
                      <i class="fas fa-gem me-3"></i>Adresse
                    </p>
                    <p class="text-center">
                        Rue champ rodange 14, Waterloo 1410
                    </p>
                    <div id="mapid" class="container-fluid my-3"></div>
                  </div>
                  <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
                    <p class="text-uppercase text-center fw-bold mb-4">
                      Horaires
                    </p>
                    <div class="text-center">
                        <p>Lundi    09h00 - 17h00</p>
                        <p>Mardi    09h00 - 17h00</p>
                        <p>Mercredi 09h00 - 17h00</p>
                        <p>Jeudi    09h00 - 17h00</p>
                        <p>Vendredi 09h00 - 17h00</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
                        <p class="text-uppercase text-center fw-bold mb-4">
                            Réseaux Sociaux
                        </p>
                        <div class="text-center">
                            <a href="https://www.facebook.com/badiane.green"><img class="icons" src="/assets/img/svg/facebook.svg" alt="Icône FaceBook"></a>
                            <a href="https://www.instagram.com/chrisrodriguezperez"><img class="icons" src="/assets/img/svg/instagram.svg" alt="Icône Instagram"></a>
                            <a href="https://www.linkedin.com/in/chris-rodriguez-perez-609716100/"><img class="icons" src="/assets/img/svg/linkedin.svg" alt="Icône Instagram"></a>
                        </div>
                  </div>
                  <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <p class="text-uppercase text-center fw-bold mb-4">Coordonnées</p>
                    <div class="text-center">
                        <p class="text-center">Envoyez-moi un mail en cliquant ci-dessous</p>
                        <a href="mailto:chrisrodriguez@hotmail.be"><img class="icons" src="/assets/img/svg/email.svg" alt="Icône email"></a> 
                    </div>
                    <p class="text-center">0470/35.05.87</p>
                  </div>
                </div>
              </div>
            </section>
                <div class="text-center fw-bolder my-5">
                    <p>&copy; Kenko - 2025</p>
                </div>
          </footer>
    </body>
</html>