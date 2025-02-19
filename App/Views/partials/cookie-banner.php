<?php if (!isset($_COOKIE['cookie-preferences'])): ?>
    <div id="cookie-banner" class="alert alert-dark text-center position-fixed bottom-0 w-100" role="alert">
        <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site !En poursuivant votre navigation, vous acceptez notre <a href="politique-cookies.php" classe="
        text-decoration-underline">politiques de cookies</a>.</p>
        <button id="accept-cookies" class="button">Accepter</button>
        <a href="cookie-preferences.php" class="btn btn-outline-light btn-sm">Gérer mes préférences</a>
    </div>
<?php endif; ?>