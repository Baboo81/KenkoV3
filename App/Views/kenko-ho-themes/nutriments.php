<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/../partials/navBar.php'; ?>

<main>
    <section class="mainSection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainTitleContent mb-5">
                        <h2 class="text-muted text-center mb-5">Établir des bonnes bases</h2>
                        <div class="line"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 my-5">
                    <div class="box rounded-5 p-4 my-5">
                        <div class="row">
                            <article class="col-md-6">
                                <p class="text-muted">Pour rester en santé il est primordial de prendre soin de :</p>
                                <ul class="mx-5">
                                    <li class="my-3 fs-3 fontBeige">son alimentation</li>
                                    <li class="my-3 fs-3 fontBeige">son sommeil</li>
                                    <li class="my-3 fs-3 fontBeige">son activitité physique</li>
                                    <li class="my-3 fs-3 fontBeige">ses émotions</li>
                                <div class="text-center my-4">
                                    <h3>Guides santé</h3>
                                </div>
                                <p class="text-muted">Ci-dessous vous trouverez différents guides qui vous donnerons des conseils pour rester en santé.</p>
                            </article>
                            <div class="col-md-6">
                                <img class="img-fluid rounded-4" src="/../assets/img/services/Kenko-Ho/pageLesBonnesBases/lesBonnesBases.jpg" alt="Image représantant une personne en souffrance" style="width: 30em;">
                            </div>
                        </div>
                        <div class="text-center my-5 d-flex">
                            <div class="p-2">
                                <h4 class="my-3 fontBeige">Guide : Vivre </h4>
                                <a href="/../assets/pdf/pageNutriments/live.pdf" download="mode de vie sain">
                                    <button class="button">Télécharger le PDF</button>
                                </a>
                            </div>
                            <div class="p-2">
                                <h4 class="my-3 fontBeige">Guide : MetaPWR </h4>
                                <a href="/../assets/pdf/pageNutriments/metapwr.pdf" download="optimiser son métabolisme">
                                    <button class="button">Télécharger le PDF</button>
                                </a>
                            </div>
                            <div class="p-2">
                                <h4 class="my-3 fontBeige">Guide : Sport </h4>
                                <a href="/../assets/pdf/pageNutriments/sport.pdf" download="Les astuces pour le sport">
                                    <button class="button">Télécharger le PDF</button>
                                </a>
                            </div>
                            <div class="p-2">
                                <h4 class="my-3 fontBeige">Guide : Vitalité </h4>
                                <a href="/../assets/pdf/pageNutriments/vitalité.pdf" download="Les astuces pour augmenter sa vitalité">
                                    <button class="button">Télécharger le PDF</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-auto">
                        <button onclick="window.location.href='/kenko-ho';" class="button">Retourner vers Kenko-Ho</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>