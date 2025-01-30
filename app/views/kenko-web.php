<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Library CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="/assets/style/reset.css" rel="stylesheet">
        <link href="/assets/style/kenkoWeb.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="/assets/script/main.js" defer></script>
        <title>Kenko-web</title>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg fixed-top">
                        <div class="container-fluid">
                            <img src="/assets/img/svg/logo.svg" alt="" id="logo">
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
                            <h1 class="homeTitle p-5">Kenko-Web</h1>
                            <p class="homeDesc p-5">Besoin d'un site web professionnel ?</p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <h1 class="text-center my-5 fs-1 fontBlack">Ce que votre webmaster vous propose</h1>
                        <article class="col-md-4 text-center">
                            <img src="/assets/img/jpeg/Kenko-Web/pictos/accompagnement.svg" alt="">
                            <h4 class="fs-2 my-1">Un accompagnement de qualité</h4>
                            <p class="p-5">Je suis à votre écoute et je vous conseille tout au long de la vie du site</p>
                        </article>
                        <article class="col-md-4 text-center">
                            <img src="/assets/img/jpeg/Kenko-Web/pictos/liberté.svg" alt="">
                            <h4 class="fs-2 my-1">La liberté de choix</h4>
                            <p class="p-5">Votre site web vous appartient, modifiez-le à votre guise ou confiez-moi cette mission !</p>
                        </article>
                        <article class="col-md-4 text-center">
                            <img src="/assets/img/jpeg/Kenko-Web/pictos/surMesure.svg" alt="">
                            <h4 class="fs-2 my-1">Un site sur-mesure</h4>
                            <p class="p-5">Je crée un site qui vous correspond</p>
                        </article>
                    </div>
                </div>
            </section>
            <section>
                <div class="container mw-100">
                    <div class="row">
                        <div class="sectionFormules"></div>
                        <article>
                            <h1 class="text-center my-5 fs-1 fontBlack">Les offres personnalisables sur devis</h1>
                        </article>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row gy-3 my-5">
                        <div class="col-md-4">
                            <div class="card rounded-4">
                                <img src="/assets/img/jpeg/Kenko-Web/siteSimple.jpg" class="card-img-top rounded-top-4" alt="Image représentant une maison au milieu d'un champ">
                                <div class="card-body text-center">
                                  <h5 class="card-title text-center fs-3 my-4">Site simple</h5>
                                  <h6 class="fontBolded fs-5 my-3">Á partir de 750€</h6>
                                  <p class="card-text">Un site simple est constitué d'une page sur laquelle figurera une présentation de vos prestations, tarifs, informations pratiques. SEO inclus.</p>
                                  <div class="button-container justify-content-center">
                                    <button onclick="showPopup('popup1')" class="my-3">Á qui s'adresse cette offre ?</button>
                                  </div>
                                </div>
                                <!-- Conteneur pop-up1-->
                                 <div class="popup-container" id="popup1">
                                    <div class="popup">
                                        <h4 class="fs-3 my-3">Pourquoi choisir l'offre : site simple ?</h3>
                                        <img src="/assets/img/jpeg/Kenko-Web/pictos/imgPopup.svg" alt="Image vectorisée d'un personnage">
                                        <p class="text-start my-3">Vous désirez :</p>
                                        <ul class="text-start">
                                            <ol class="my-2">&#9679; &nbsp;Un site web qui contient simplement les informations essentielles</ol>
                                            <ol class="my-2">&#9679; &nbsp;Un référencement de qualité</ol>
                                            <ol class="my-2">&#9679; &nbsp;Un design simple et efficace</ol>
                                        </ul>
                                        <p class="pPopUp fs-6 my-3">Un site simple pourrais être une alternative temporaire avant de passer à un site multi-pages.</p>
                                        <div class="button-container justify-content-center">
                                            <button onclick="closePopup('popup1')" class="my-3">Fermer</button>
                                        </div>
                                    </div>
                                 </div>
                                <!-- Conteneur pop-up1 END -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card rounded-4">
                                <img src="/assets/img/jpeg/Kenko-Web/siteVitrine.jpg" class="card-img-top rounded-top-4" alt="Image représentant une vitrine de boulangerie">
                                <div class="card-body text-center">
                                  <h5 class="card-title text-center fs-3 my-3">Site vitrine</h5>
                                  <h6 class="fontBolded fs-5 my-3">Á partir de 1550€</h6>
                                  <p class="card-text">Un site vitrine comprend 5 à 7 pages grâce auxquelles les internautes pourront découvrir votre activité.<br />Avec un site vitrine vous dévoilerez plus de détails sur les différentes facettes de votre activité.</p>
                                  <div class="button-container justify-content-center">
                                    <button onclick="showPopup('popup2')" class="my-3">Á qui s'adresse cette offre ?</button>
                                  </div>
                                </div>
                                    <!-- Conteneur pop-up2 -->
                                    <div class="popup-container" id="popup2">
                                        <div class="popup">
                                            <h4 class="fs-3 my-3">Pourquoi choisir l'offre : site vitrine ?</h3>
                                            <img src="/assets/img/jpeg/Kenko-Web/pictos/imgPopup.svg" alt="Image vectorisée d'un personnage">
                                            <p class="text-start my-3">Vous désirez :</p>
                                            <ul class="text-start">
                                                <ol class="my-2">&#9679; &nbsp;Mettre en avant un catalogue de produits, une galerie photos, vos partenaires, ...</ol>
                                                <ol class="my-2">&#9679; &nbsp;Présenter votre entreprise grâce des contenus personnalisés.</ol>
                                            </ul>
                                            <div class="button-container justify-content-center">
                                                <button onclick="closePopup('popup2')" class="my-3">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Conteneur pop-up2 END -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card rounded-4 text">
                                <img src="/assets/img/jpeg/Kenko-Web/siteXXL2.jpg" class="card-img-top rounded-top-4" alt="Image représentant des buissons">
                                <div class="card-body text-center">
                                  <h5 class="card-title text-center fs-3 my-3">Site XXL</h5>
                                  <h6 class="fontBolded fs-5 my-3">Á partir de 2000€</h6>
                                  <p class="card-text">Un site XXL se composera 8 à 12 pages. Les internautes auront une vision approfondie de vos activités.</p>
                                  <div class="button-container justify-content-center">
                                    <button onclick="showPopup('popup3')" class="my-3">Á qui s'adresse cette offre ?</button>
                                  </div>
                                </div>
                                    <!-- Conteneur pop-up3 -->
                                    <div class="popup-container" id="popup3">
                                        <div class="popup">
                                            <h4 class="fs-3 my-3">Pourquoi choisir l'offre : site XXL ?</h3>
                                            <img src="/assets/img/jpeg/Kenko-Web/pictos/imgPopup.svg" alt="Image vectorisée d'un personnage">
                                            <p class="text-start my-3">Cette option est adaptée si :</p>
                                            <ul class="text-start">
                                                <ol class="my-2">&#9679; &nbsp;Vous proposez un large panel d'activités.</ol>
                                                <ol class="my-2">&#9679; &nbsp;Vous avez beaucoup de conccurence et souhaitez un référencement plus poussé.</ol>
                                            </ul>
                                            <div class="button-container justify-content-center">
                                                <button onclick="closePopup('popup3')" class="my-3">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Conteneur pop-up3 END -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <img src="/assets/img/jpeg/Kenko-Web/pictos/atouts.svg" class="pictoAtoutsPerso" alt="">
                        <div class="d-flex my-5 atoutsContent">
                            <article class="col-md-4 text-center">
                                <img src="/assets/img/jpeg/Kenko-Web/pictos/work.svg" class="pictoAtouts" alt="">
                                <p class="p-1">Mettre en avant et expliquez votre activité</p>
                            </article>
                            <article class="col-md-4 text-center">
                                <img src="/assets/img/jpeg/Kenko-Web/pictos/partenaires.svg" class="pictoAtouts" alt="">
                                <p class="p-1">Présentez vos partenaires</p>
                            </article>
                            <article class="col-md-4 text-center">
                                <img src="/assets/img/jpeg/Kenko-Web/pictos/localiser.svg" class="pictoAtouts" alt="">
                                <p class="p-1">Donnez les informations pratiques de votre entreprise</p>
                            </article>
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