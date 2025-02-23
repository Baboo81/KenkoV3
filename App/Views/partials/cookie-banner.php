<div class="container">
    <div class="row justify-content-center">
        <?php if (!isset($_COOKIE['cookie-preferences'])): ?>
        <div id="cookie-banner" class="cookie-banner alert alert-dark text-center position-fixed bottom-0" role="alert">
            <div class="cookie-icon-container">
                <img src="./assets/img/icons/cookiesIcon.svg" alt="Picto représentant un cookie" style="height: 10rem;">
            </div>
            <article class="my-5">
                <p class="text-muted">Nous utilisons des cookies pour améliorer votre expérience sur notre site !</p>
                <p class="text-muted">En poursuivant votre navigation, vous acceptez notre <a href="politique-cookies.php" classe="
                text-decoration-underline">politiques de cookies</a>.</p>
            </article>
            <div>
                <button id="accept-cookies" class="button">Accepter</button>
                <button onclick="window.location.href='/cookie-preferences.php';"  class="button">Gérer mes préférences</button>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
