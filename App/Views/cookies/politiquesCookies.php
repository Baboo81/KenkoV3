<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/../partials/navBar.php'; ?>

<main>
    <div class="container mainContent">
        <div class="row">
            <div class="my-5">
                <h1 class="text-center text-muted my-5">Politique des Cookies</h1>
            </div>
            <div class="col-md-8 my-5">
                <div class="box rounded-5 p-5">
                    <p class="text-muted text-center mb-3"><strong>Dernière mise à jour :</strong> 17/03/2025</p>
                    <article class="my-4">
                        <h2 class="my-3">Qu’est-ce qu’un cookie ?</h2>
                        <p class="text-muted">Un cookie est un petit fichier texte stocké sur votre appareil. Ce cookie servira à mémoriser certaines informations sur l'utilisateur, voici les informations que les cookies peuvent stocker :</p>
                        <ul class="text-muted my-3">
                            <li class="mx-4">1. Les préférences utilisateur du type : thème sombre, langue, etc</li>
                            <li class="mx-4">2. Les identifiants de connexion (afin d'éviter de se reconnecter à chaque visite)</li>
                            <li class="mx-4">3. Le panier d'achat sur un site e-commerce</li>
                            <li class="mx-4">4. Le comportement de navigation.</li>
                        </ul>
                    </article>
                    <article class="my-4">
                        <h2 class="my-3">Quels types de cookies utilisons-nous ?</h2>
                        <h3 class="text-center my-4">Les cookies analytiques</h3>
                        <p class="text-muted">Ces cookies nous aident à comprendre comment les visiteurs interagisssent avec notre site. Ils collectent des données sur :</p>
                        <ul class="text-muted my-3">
                            <li class="mx-4">1. Le nombre de visites et les pages consultées</li>
                            <li class="mx-4">2. La durée de navigation sur le site</li>
                            <li class="mx-4">3. Les sources du trafic (moteurs de recherche, réseaux sociaux, etc.)</li>
                        </ul>
                        <p class="text-muted">Ces informations nous permettent d'améliorer nos contenus et l'espérience utilisateur.</p>
                        <h3 class="text-center my-4">Les cookies marketing</h3>
                        <p class="text-muted">Ces cookies sont utilisés pour personnaliser les publicités affichées sur notre site et ailleurs sur le web. Ils permettent :</p>
                        <ul class="text-muted my-3">
                            <li class="mx-4">1. D'afficher des publicités en fonctions de vos centres d'intérêts</li>
                            <li class="mx-4">2. De limiter le nombre de fois où vous verrez une publicité</li>
                            <li class="mx-4">3. De mesurer l'efficacité des campagnes publicitaires</li>
                        </ul>
                        <p class="text-muted">Vous pouver <b>accepter ou refuser</b> ces cookies via notre bannière de gestion des préférences.</p>
                    </article>
                    <article>
                        <h2 class="my-3">Comment gérer vos préférences ?</h2>
                        <p class="text-muted">Vous pouvez modifier vos préférences en cliquant ci-dessous.</p>
                        <div class="text-center my-4">
                            <button onclick="window.location.href='/cookies/cookie-preferences';" class="button">Gérer vos préférences</button>
                        </div>
                    </article>
                    <article>
                        <h2 class="my-3">Durée de conservation des cookies</h2>
                        <p class="text-muted">Nous conservons vos préférences pendant <b>13 mois</b>.</p>

                        <h2 class="my-3">Contact</h2>
                        <p class="text-muted">Pour toute question, contactez-moi en cliquant ci-dessous.</p>
                        <div class="text-center my-4">
                            <button onclick="window.location.href='/contact';" class="button">Contactez-moi</button>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-4 position">
                <img src="/assets/img/img/cookies.jpg" class="img-fluid rounded-5 cookie-image" alt="Photo représentant une pile de cookies">
            </div>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?> 