<div class="container">
    <div class="row">
        <?php if (!isset($_COOKIE['cookie-preferences'])): ?>
        <div id="cookie-banner" class="cookie-banner alert alert-dark text-center position-fixed bottom-0" role="alert">
            <div class="cookie-icon-container">
                <img src="./assets/img/icons/cookiesIcon.svg" alt="Picto représentant un cookie">
            </div>
            <article>
                <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site !En poursuivant votre navigation, vous acceptez notre <a href="politique-cookies.php" classe="
                text-decoration-underline">politiques de cookies</a>.</p>
            </article>
            <div>
                <button id="accept-cookies" class="button">Accepter</button>
                <button onclick="window.location.href='/cookie-preferences.php';"  class="button">Gérer mes préférences</a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
