<?php include 'partials/header.php'; ?>
<?php include 'partials/navBar.php'; ?>

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
                <div class="container purposes">
                    <div class="row">
                        <div class="my-5">
                            <h1 class="text-center my-5 fs-1 fontBlack">Ce que votre webmaster vous propose</h1>
                        </div>
                        <article class="col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
                            <img src="/assets/img/services/Kenko-Web/pictos/accompagnement.svg" alt="">
                            <h4 class="fs-2 my-1">Un accompagnement de qualité</h4>
                            <p class="p-5">Je suis à votre écoute et je vous conseille tout au long de la vie du site</p>
                        </article>
                        <article class="col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
                            <img src="/assets/img/services/Kenko-Web/pictos/liberté.svg" alt="">
                            <h4 class="fs-2 my-1">La liberté de choix</h4>
                            <p class="p-5">Votre site web vous appartient, modifiez-le à votre guise ou confiez-moi cette mission !</p>
                        </article>
                        <article class="col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
                            <img src="/assets/img/services/Kenko-Web/pictos/surMesure.svg" alt="">
                            <h4 class="fs-2 my-1">Un site sur-mesure</h4>
                            <p class="p-5">Je crée un site qui vous correspond</p>
                        </article>
                    </div>
                </div>
            </section>
            <section class="my-5">
                <div class="container mw-100 my-5">
                    <div class="row">
                        <div class="sectionFormules my-5"></div>
                        <div class="my-5">
                            <h1 class="text-center my-5 fs-1 fontBlack">Les offres personnalisables sur devis</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row gy-3 my-5">
                        <div class="col-md-4">
                            <div class="card rounded-4">
                                <img src="/assets/img/services/Kenko-Web/siteSimple.jpg" class="card-img-top rounded-top-4" alt="Image représentant une maison au milieu d'un champ">
                                <div class="card-body d-flex flex-column text-center">
                                  <h5 class="card-title text-center fs-3 my-3">Site simple</h5>
                                  <h6 class="fontBolded fs-5 my-3">Á partir de 750€</h6>
                                  <p class="card-text">Un site simple est constitué d'une page sur laquelle figurera une présentation de vos prestations, tarifs, informations pratiques. SEO inclus.</p>
                                  <div class="button-container mt-auto justify-content-center">
                                    <button onclick="showPopup('popup1')" class="my-3">Á qui s'adresse cette offre ?</button>
                                  </div>
                                </div>
                                <!-- Conteneur pop-up1-->
                                 <div class="popup-container" id="popup1">
                                    <div class="popup">
                                        <h4 class="fs-3 my-3">Pourquoi choisir l'offre : site simple ?</h3>
                                        <img src="/assets/img/services/Kenko-Web/pictos/imgPopup.svg" alt="Image vectorisée d'un personnage">
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
                                <img src="/assets/img/services/Kenko-Web/siteVitrine.jpg" class="card-img-top rounded-top-4" alt="Image représentant une vitrine de boulangerie">
                                <div class="card-body d-flex flex-column text-center">
                                  <h5 class="card-title text-center fs-3 my-3">Site vitrine</h5>
                                  <h6 class="fontBolded fs-5 my-3">Á partir de 1550€</h6>
                                  <p class="card-text">Un site vitrine comprend 5 à 7 pages grâce auxquelles les internautes pourront découvrir votre activité.<br />Avec un site vitrine vous dévoilerez plus de détails sur les différentes facettes de votre activité.</p>
                                  <div class="button-container mt-auto justify-content-center">
                                    <button onclick="showPopup('popup2')" class="my-3">Á qui s'adresse cette offre ?</button>
                                  </div>
                                </div>
                                    <!-- Conteneur pop-up2 -->
                                    <div class="popup-container" id="popup2">
                                        <div class="popup">
                                            <h4 class="fs-3 my-3">Pourquoi choisir l'offre : site vitrine ?</h3>
                                            <img src="/assets/img/services/Kenko-Web/pictos/imgPopup.svg" alt="Image vectorisée d'un personnage">
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
                                <img src="/assets/img/services/Kenko-Web/siteXXL2.jpg" class="card-img-top rounded-top-4" alt="Image représentant des buissons">
                                <div class="card-body d-flex flex-column text-center">
                                  <h5 class="card-title text-center fs-3 my-3">Site XXL</h5>
                                  <h6 class="fontBolded fs-5 my-3">Á partir de 2000€</h6>
                                  <p class="card-text">Un site XXL se composera 8 à 12 pages. Les internautes auront une vision approfondie de vos activités.</p>
                                  <div class="button-container mt-auto justify-content-center">
                                    <button onclick="showPopup('popup3')" class="my-3">Á qui s'adresse cette offre ?</button>
                                  </div>
                                </div>
                                    <!-- Conteneur pop-up3 -->
                                    <div class="popup-container" id="popup3">
                                        <div class="popup">
                                            <h4 class="fs-3 my-3">Pourquoi choisir l'offre : site XXL ?</h3>
                                            <img src="/assets/img/services/Kenko-Web/pictos/imgPopup.svg" alt="Image vectorisée d'un personnage">
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
        <div class="container blocAtouts">
            <div class="row align-items-center"> 
                <!-- Image -->
                <div class="col-md-6">
                    <img src="/assets/img/services/Kenko-Web/pictos/atouts.svg" class="pictoAtoutsPerso" alt="Picto représentant deux personnages tenant un panneau">
                </div>
                <!-- Bloc articles -->
                <div class="col-md-6 d-flex flex-column atoutsContent">
                    <article class="text-center mb-3">
                        <img src="/assets/img/services/Kenko-Web/pictos/work.svg" class="pictoAtouts" alt="Picto représentant un écran d'ordinateur">
                        <p class="p-1">Mettre en avant et expliquez votre activité</p>
                    </article>
                    <article class="text-center mb-3">
                        <img src="/assets/img/services/Kenko-Web/pictos/partenaires.svg" class="pictoAtouts" alt="Picto représentant des personnages en réseau">
                        <p class="p-1">Présentez vos partenaires</p>
                    </article>
                    <article class="text-center">
                        <img src="/assets/img/services/Kenko-Web/pictos/localiser.svg" class="pictoAtouts" alt="Picto représentant deux points géographiques">
                        <p class="p-1">Donnez les informations pratiques de votre entreprise</p>
                    </article>
                </div>
            </div>
        </div>
  </section>
  <section>
    <div class="container">
        <div class="row">
            <div class="my-5">
                <h1 class="text-center my-5 fs-1 fontBlack">Les étapes de la création de votre site web</h1>
            </div>
            <section class="container py-5">
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-content text-center">
                            <h4 class="fw-bold my-3">1. Prise de contact</h4>
                            <img src="/assets/img/services/Kenko-Web/pictos/frise/rdv.svg" alt="Picto représentant deux personnes assisent à une table" class="me-3 my-2" width="60">
                            <p class="text-muted">Discussion initiale pour comprendre vos besoins et objectifs.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content text-center">
                            <h4 class="fw-bold my-3">2. Devis</h4>
                            <img src="/assets/img/services/Kenko-Web/pictos/frise/devis.svg" alt="Picto représentant un devis papier" class="me-3 my-2" width="60">
                            <p class="text-muted">Élaboration d'un devis gratuit détaillé en fonction de votre projet.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content text-center">
                            <h4 class="fw-bold my-3">3. Création de la maquette</h4>
                            <img src="/assets/img/services/Kenko-Web/pictos/frise/maquette.svg" alt="Picto représentant un crayon et une latte" class="me-3 my-2" width="60">
                            <p class="text-muted">Conception du design et des wireframes pour visualiser le site.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content text-center">
                            <h4 class="fw-bold my-3">4. Validation de la maquette</h4>
                            <img src="/assets/img/services/Kenko-Web/pictos/frise/validationMaquette.svg" alt="Picto représentant un v en vert" class="me-3 my-2" width="70">
                            <p class="text-muted">Ajustements et validation finale du design avant développement.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content text-center">
                            <h4 class="fw-bold my-3">5. Développement du site</h4>
                            <img src="/assets/img/services/Kenko-Web/pictos/frise/developpement.svg" alt="Picto représentant un ordinateur" class="me-3 my-2" width="70">
                            <p class="text-muted">Intégration du design et développement des fonctionnalités.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content text-center">
                            <h4 class="fw-bold my-3">6. Hébergement</h4>
                            <img src="/assets/img/services/Kenko-Web/pictos/frise/hebergement.svg" alt="Picto représentant un serveur et un nuage" class="me-3 my-2" width="70">
                            <p class="text-muted">Configuration du serveur et mise en place de l'hébergement.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content text-center">
                            <h4 class="fw-bold my-3">7. Mise en ligne</h4>
                            <img src="/assets/img/services/Kenko-Web/pictos/frise/miseEnLigne.svg" alt="Picto représentant une sphère avec les 3 W" class="me-3 my-2" width="70">
                            <p class="text-muted">Déploiement du site, tests finaux et suivi post-lancement.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content text-center">
                            <h4 class="fw-bold my-3">8. Suivi durant un mois</h4>
                            <img src="/assets/img/services/Kenko-Web/pictos/frise/suivi.svg" alt="Picto représentant une loupe scrutant un écran d'ordinateur avec un oeil à côté" class="me-3" width="100">
                            <p class="text-muted">Corrections des éventuels bugs et ajustements.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
  </section>
  <section class="maintenanceSection">
    <div class="container">
        <div class="row">
            <div class="my-5">
                <h1 class="text-center my-5 fs-1 fontBlack">Service de maintenance</h1>
            </div>
            <div class="box rounded-5 p-5 d-flex align-center justify-items-center">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/services/Kenko-Web/pictos/maintenance.svg" alt="Illustration représentant des personnages qui règlent des engrenages" class="img-fluid w-100" style="object-fit:cover;">
                </div>
                <div class="col-md-6">
                    <article class="fontWhite">
                        <p class="text-center">Un site web bien entretenu, c'est un site sécurisé, performant et toujours à jour !<br />Pour éviter les bugs, améliorer le référencement et assurer une expérience fluide à vos visiteurs, je propose un service de maintenance adapté à vos besoins.<br />Je propose des interventions ponctuelles ou au forfait mensuel selon vos besoins.</p>
                        <h4 class="text-center my-3">Types de maintenances</h4>
                        <ul class="mx-3 my-4">
                            <h5>Maintenance technique</h5>
                            <li class="my-2">1. Corrections de bugs et optimisation des performances</li>
                            <li class="my-2">2. Sauvegardes régulières</li>
                            <li class="my-2">3. Surveillance de la sécurité</li>
                        </ul>
                        <ul class="mx-3 my-4">
                            <h5>Maintenance évolutive</h5>
                            <li class="my-2">1. Ajouts ou modification de pages</li>
                            <li class="my-2">2. Changement de design ou d'éléments graphiques</li>
                            <li class="my-2">3. Mise en conformité RGPD (cookies, mentions légales ...)</li>
                        </ul>
                        <ul class="mx-3 my-4">
                            <h5>Mise à jour du contenu</h5>
                            <li class="my-2">1. Modification de textes, d'images, de photos</li>
                            <li class="my-2">2. Mise à jour des tarifs et fiches de produits</li>
                            <li class="my-2">3. Ajout d'articles de blog</li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="hebergementSection">
    <div class="container">
        <div class="row">
            <div class="my-5">
                <h1 class="text-center my-5 fs-1 fontBlack">Hebergement</h1>
            </div>
            <div class="box rounded-5 p-5 d-flex align-center justify-items-center">
                <div class="col-md-6">
                    <article class="fontWhite">
                        <p class="text-center">Pour vous assurer une tranquilité d'esprit totale, je prends en charge l'hébergement de votre site web.<br />Votre site sera hébergé sur un serveur performant et sécurisé, garantissant un accès rapide et fluide à vos visiteurs.</p>
                        <div class="my-3">
                            <h5 class="my-2">Gestion du domaine et du certificat SSL</h5>
                            <p>Si vous n'avez pas encore de nom de domaine, je peux m'occuper de son achat et de son renouvellement.<br />Le certificat SSL est inclus pour sécuriser les échanges de données sur votre site.</p>
                        </div>
                        <div class="my-3">
                            <h5 class="my-2">Sécurité et maintenance</h5>
                            <p>Je veille au bon fonctionnement du serveur, aux mises à jour de sécurité et à la protection contre les cyberattaques.</p>
                        </div>
                        <div class="my-3">
                            <h5 class="my-2">Un forfait adapté à vos besoins</h5>
                            <p>Les frais d'hébergement seront intégrés dans un forfait choisi par vos soins. Je peux également proposer une offre personnalisée selon vos besoins spécifiques.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/services/Kenko-Web/pictos/miseEnLigne.svg" alt="Illustration représentant un personnage asssis sur un server" class="img-fluid w-100" style="object-fit:cover;">
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="trustSection">
        <div class="container">
            <div class="row align-items-center">
                <div class="trustBox d-flex justify-content-center align-items-center">
                    <!-- Texte à gauche -->
                    <div class="col-md-3 d-flex flex-column align-items-start text-md-start text-center mx-5">
                        <article class="text-center">
                            <p class="fs-4 fontWhite mb-3">Ils font confiance à</p>
                            <p class="fs-3 fontWhite">KENKO-WEB</p>
                        </article>
                    </div>
                    <!-- Logos à droite (superposés) -->
                    <div class="col-md-3 d-flex justify-content-center align-items-center position-relative logo-container">
                        <img id="logo1" class="logo active" src="./assets/img/logo/soinsDeSoie.svg" alt="Logo Soins de soie" style="height: 10rem;">
                        <img id="logo2" class="logo" src="./assets/img/logo/souffleDequilibre.svg" alt="Logo Souffle d'équilibre" style="height: 10rem;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>