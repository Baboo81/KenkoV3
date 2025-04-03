<?php include 'partials/header.php' ?>
<?php include 'partials/navBar.php' ?>

<!-- Affichage des messages de succès ou d'erreur -->
<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?= $_SESSION['message']['type']; ?> alert-dismissible fade show text-center" role="alert">
        <?= $_SESSION['message']['text']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); ?> <!-- Supprimer le message après affichage -->
<?php endif; ?>

<?php if (isset($_SESSION['message_logout'])): ?>
    <div class="alert alert-<?= $_SESSION['message_logout']['type']; ?> alert-dismissible fade show text-center" role="alert">
        <?= $_SESSION['message_logout']['text']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message_logout']); ?> <!-- Supprimer le message après affichage -->
<?php endif; ?>

    <body>
        <main>
            <section class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mainContent">
                            <h1 class="mainTitle"></h1>
                            <p class="secondTitle mt-5 text-nowrap">Bienvenue dans deux univers ...</p>
                            <img src="./assets/img/logo/logoAnimate.svg" alt="Logo animé" id="logoAnimation">
                        </div>
                    </div>
                </div>
            </section>
            <section class="mainSection">
                <div class="container mw-100">
                    <div class="row">
                        <div class="col-md-12 part1 position-relative">
                            <div class="card rounded-4 bg-grey p-3 position-absolute top-50 start-50 translate-middle" style="width: 55rem;">
                                <div class="kenkoTitles">
                                    <h3 class="text-center my-5">KENKO-HO</h3>
                                </div>
                                <img src="./assets/img/services/Kenko-Ho/kenko-ho.svg" class="card-img-top rounded-3" alt="Image représentant un jardin zen">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fs-1 text-center mb-5">Envie d'améliorer votre bien-être ?</h5>
                                    <p class="card-text text-center">Votre <strong>conséillère bien-être dōTERRA</strong>  vous proposera d'améliorer votre quotidien en intégrant des huiles essentielles de haute qualité. Grâce à un suivi personnalisé et régulier, vous apprendrez à utiliser differentes <strong>huiles essentielles</strong>  en fonction de vos besoins ainsi que des besoins de votre famille.</p>
                                    <p class="fontGreen text-center fw-bold my-3">Cet espace est réservé aux clients dōTERRA ! Pour avoir plus d'informations à ce sujet contactez-moi via le formulaire de contact se trouvant sur la page : contact accessible dans le menu de la navigation ou bien par email et par téléphone aussi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 part2 position-relative">
                            <div class="card rounded-4 bg-blue p-3 position-absolute top-50 start-50 translate-middle" style="width: 55rem;">
                                <div class="kenkoTitles">
                                    <h3 class="text-center my-5">KENKO-WEB</h3>
                                </div>
                                <img src="./assets/img/services/Kenko-Web/KenkoWeb.svg" class="card-img-top rounded-3" alt="Image représentant un jardin zen">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fs-1 text-center mb-5">Besoin d'un site web professionnel ?</h5>
                                    <p class="card-text text-center">Vos compétences, votre expertise ainsi que vos valeurs seront mis en avant grâce à votre communication digitale.<br />Votre <strong>webmaster</strong> vous proposera un site sur mesure afin de satisfaire vos besoins.</p>
                                    <div class="text-center my-5">
                                        <button onclick="window.location.href='/kenko-web';" class="button">Visiter Kenko-Web</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php include 'partials/cookie-banner.php' ?>
<?php include 'partials/footer.php' ?>