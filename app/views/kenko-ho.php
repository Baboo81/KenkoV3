<?php include 'partials/header.php'; ?>
<?php include 'partials/navBar.php'; ?>

<?php
    session_start();

    //Vérifie si l'utilisateur a bien entré le code
    if (!isset($_SESSION['kenko_access']) || $_SESSION['kenko_access'] !== true) {
        header("Location: home"); //redirection vers la page d'accueil
        exit();
    }

?>    
        
        <main>
            <section class="sections home text-center">
                <div class="overlay">
                    <div class="container">
                        <div class="homeContent">
                            <h1 class="homeTitle text-muted p-5">Kenko-Ho</h1>
                            <p class="homeDesc text-muted p-5">Retrouvez la voie de l'équilibre grâce aux huiles essentielles et au Reiki</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mainSection">
                <div class="container">
                    <div class="row my-5">
                        <div class="col-md-12 position-relative">
                            <img src="/assets/img/services/Kenko-Ho/dōTERRAConsLogo.svg" alt="Logo de conséillère dōTERRA" class="doTERRA position-absolute top-50 my-5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="bloc1 my-5">
                            <div class="mainTitleContent">
                                <h2 class="mainSectionTitle text-muted text-center p-5">Que vous propose votre conséillère dōTERRA ?</h2>
                                <div class="underLine">   
                                    <div class="line"><span></span></div>
                                </div>
                            </div>
                            <section class="d-flex myself">
                                <article class="col-md-6 my-5">
                                    <div class="box rounded-5 p-5">
                                        <p class="text-muted">Mon objectif est de vous aider à améliorer votre bien-être en incorporant les huiles essentielles à votre quotidien, en établissant de nouvelles bases solides grâces aux nutriments et en adoptant des routines saines.</p>
                                        <p class="text-muted my-2">Ce suivi va vous permettre d'apprendre à utiliser et connaître les différentes huiles essentielles en toute simplicité, je serai là pour vous donner toutes les informations nécessaire ainsi que des astuces qui vous guiderons sur la voie de l'autonomie et du bien-être.</p>
                                        <p class="text-muted my-2">Avec le Reiki je pourrais équilibrer la sphère énergétique de votre être, le Reiki est un art de soigner mais aussi une philosophie de vie qui a vu le jour au Japon à la fin du XIX e siècle.</p>
                                    </div>
                                </article>
                                <div class="col-md-6 mx-5">   
                                    <img src="/assets/img/services/Kenko-Ho/Chris.jpg" alt="Photo de moi-même dans un labyrinthe de maîs" class="img-fluid rounded-5">
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                            <div class="mainTitleContent mb-5">
                                <h2 class="mainSectionTitle text-muted text-center p-5">Les thématiques & infos téléchargeables</h2>
                                <div class="line"><span></span></div>
                            </div>
                            <section class="my-5 btnBloc">
                                <div class="col-md-12 text-center">
                                    <button onclick="window.location.href='../kenko-ho-themes/dix-huiles-de-base';"  class="button">Les 10 huiles de bases</button>
                                    <button onclick="window.location.href='../kenko-ho-themes/emotions';"  class="button">Les émotions & les H.E</button>
                                    <button onclick="window.location.href='../kenko-ho-themes/enfants';"  class="button">Les enfants & les H.E</button>
                                    <button onclick="window.location.href='../kenko-ho-themes/microbiome';"  class="button">Le Microbiome</button>
                                    <button  class="button">Le Reiki</button>
                                </div>
                                <div class=" col-md-12 text-center">
                                    <button onclick="window.location.href='../kenko-ho-themes/cuisine';"  class="button">Les H.E dans la cuisine</button>
                                    <button onclick="window.location.href='../kenko-ho-themes/sommeil';"  class="button">Le sommeil & les HE</button>
                                    <button onclick="window.location.href='../kenko-ho-themes/peau';"  class="button">La peau & les HE</button>
                                    <button onclick="window.location.href='../kenko-ho-themes/douleur';"  class="button">La douleur & les HE</button>
                                    <button onclick="window.location.href='../kenko-ho-themes/nutriments';"   class="button">Établir des bonnes bases</button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section><!-- Fin de la section : mainSection -->
            <section>
                <div class="container">
                    <div class="row">
                        
                    </div>
                </div>
            </section><!-- Fin de la section : HE search -->
            <section class="w-100 slider">
                <div class="w-100">
                    <div class="row w-100">
                        <div class="sliderSection w-100">
                            <div class="w-100">
                                <div class="row w-100">
                                    <!-- Slider doTERRA  -->
                                    <div class="sliderContent w-100">
                                        <div class="slide">
                                            <div class="item box1">
                                                <div class="content text-center">
                                                    <div class="name fontGreen my-5">Les agrumes</div>
                                                    <div class="description fontGreen">Retrouvez joie et bonne humeur avec les agrumes, aromatisez vos boissons en y ajoutant une goutte de ces merveilleuses huiles pour bénéficier de leurs bienfaits</div>
                                                    <div class="text-center">
                                                        <button type="button" class="button">Plus d'infos</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item box2">
                                                <div class="content text-center">
                                                    <div class="name fontOrange my-5">MetaPWR</div>
                                                    <div class="description fontOrange">Pour améliorer l'activité métabolique.</div>
                                                    <div class="text-center my-5">
                                                        <button type="button" class="button">Plus d'infos</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item box3">
                                                <div class="content text-center">
                                                    <div class="name fontBeige my-5">Les bases</div>
                                                    <div class="description fontBeige">retrouver son plein potentiel avec les nutriments, les anti-oxydants et les acides-gras</div>
                                                    <div class="text-center my-5">
                                                        <button type="button" class="button">Plus d'infos</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item box4">
                                                <div class="content text-center">
                                                    <div class="name fontWhite my-5">Les huiles en cuisine</div>
                                                    <div class="description fontWhite">Ajoutez de la saveur à vos plats tout en bénéficiant des bienfaits des huiles</div>
                                                    <div class="text-center my-5">
                                                        <button type="button" class="button">Plus d'infos</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item box5">
                                                <div class="content text-center">
                                                    <div class="name fontGreen my-5">La digestion</div>
                                                    <div class="description fontGreen">Améliorer son confort digestif</div>
                                                    <div class="text-center my-5">
                                                        <button type="button" class="button">Plus d'infos</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item box6">
                                                <div class="content text-center">
                                                    <div class="name fontWhite my-5">Retrouver calme & sérénité</div>
                                                    <div class="description fontWhite">Retrouver calme et sérénité.</div>
                                                    <div class="text-center my-5">
                                                        <button type="button" class="button">Plus d'infos</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                       <div class="btn-prev-next justify-content-center">
                                            <div class="mx-5">
                                                <button class="button prev"><</button>
                                            </div>
                                            <div class="mx-5">
                                                <button class="button next">></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!-- Slider doTERRA END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="my-5 commentsBox">
                <div class="container my-5" id="testimonials">
                   <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <!-- Avis dynamiques ici -->
                                    <?php foreach ($testimonials as $index => $testimonial): ?>
                                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                            <div class="testimonial p-3 mb-3 border rounded shadow-sm">
                                                <div class="testimonial-rating">
                                                    <!-- Affichage des étoiles -->
                                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                                        <span class="star <?php echo $i <= $testimonial['rating'] ? 'filled' : ''; ?>">★</span>
                                                    <?php endfor; ?>
                                                </div>
                                                <div class="testimonial-comment">
                                                    <p class="mb-1"><strong><?php echo $testimonial['name']; ?></strong></p>
                                                    <p><?php echo $testimonial['comment']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Form d'ajout d'avis  -->
                    <div class="row mt-5">
                        <div class="col-md-8 mx-auto">
                            <h3 class="text-center">Laissez votre avis</h3>
                            <!-- Bloc msg Bootstrap -->
                            <?php if (!empty($message)): ?>
                                <div class="alert alert-<?php echo $message['type']; ?> alert-dismissible fade show text-center" role="alert">
                                    <?php echo $message['text']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <!-- Bloc msg Bootstrap END -->
                            <form id="testimonialForm" method="POST" action="/kenko-ho/testimonials">
                                <div class="col-md-12 d-flex align-items-center justify-content-center">
                                    <img src="/assets/img/form/commentsBox.svg" alt="Illustration commentsBox" class="img-fluid w-100" style="object-fit:cover;">
                                </div>
                               <div class="col-md-12">
                                    <div class="my-4">
                                        <label for="userName" class="form-label mb-3">Votre Nom</label>
                                        <input type="text" class="form-control" id="userName" name="userName" required>
                                    </div>
                                    <div class="my-4">
                                        <label class="form-label mb-3">Votre Note</label>
                                        <div class="rating">
                                            <!-- Étoiles cliquables -->
                                            <input type="radio" id="star1" name="rating" value="1" required>
                                            <label for="star1">★</label>
                                            <input type="radio" id="star2" name="rating" value="2">
                                            <label for="star2">★</label>
                                            <input type="radio" id="star3" name="rating" value="3">
                                            <label for="star3">★</label>
                                            <input type="radio" id="star4" name="rating" value="4">
                                            <label for="star4">★</label>
                                            <input type="radio" id="star5" name="rating" value="5">
                                            <label for="star5">★</label>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <label for="testimonialMessage" class="form-label mb-3">Votre Témoignage</label>
                                        <textarea class="form-control" id="testimonialMessage" name="testimonialsMessage" rows="3" required></textarea>
                                    </div>
                                    <div class="my-5">
                                        <button type="submit" class="button w-100">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

  <?php include 'partials/footer.php'; ?>      