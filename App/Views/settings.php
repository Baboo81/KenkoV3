<?php
    //Démarrer le session si elle n'est pas déjà active
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

   //Génère un token si non existant
   if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
   }
?>




<?php include 'partials/header.php'; ?>

<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?= $_SESSION['message']['type']; ?> alert-dismissible fade show text-center" role="alert">
        <?= $_SESSION['message']['text']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); ?> <!-- Supprime le message après affichage -->
<?php endif; ?>

<main>
    <section class="mainContent">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h1 class="text-center text-muted my-5">Paramètres du compte</h1>
                <div class="col-md-12 my-5">
                    <form class="rounded-5 p-5 d-flex align-center justify-items-center" action="/settings" method="post" enctype="multipart/form-data" autocomplete="off">
                            <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']; ?>">
                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                <img src="/assets/img/form/paramètres.svg" alt="Illustration contact" class="img-fluid w-100" style="object-fit:cover;">
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="lastname" class="form-label mb-3">Nom :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $_SESSION['user']['lastname'] ?? ''; ?>" placeholder="Veuillez indiquer votre nom de famille" required>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="firstname" class="form-label mb-3">Prénom :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $_SESSION['user']['firstname'] ?? ''; ?>" placeholder="Veuillez indiquer votre prénom" required>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="email" class="form-label mb-3">Adresse email:</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['user']['email'] ?? ''; ?>" placeholder="Veuillez indiquer votre adresse mail" required>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="address" class="form-label mb-3">Adresse :</label> <!-- Changement ici -->
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-house-door"></i></span>
                                        <input type="text" class="form-control" id="address" name="address" value="<?= $_SESSION['user']['address'] ?? ''; ?>" placeholder="Veuillez indiquer votre adresse" required> <!-- Changement ici -->
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="city" class="form-label mb-3">Ville :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-buildings"></i></span>
                                        <input type="text" class="form-control" id="city" name="city" value="<?= $_SESSION['user']['city'] ?? ''; ?>" placeholder="Veuillez indiquer le nom de la ville dans laquelle vous vivez" required>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="postal_code" class="form-label mb-3">Code Postal :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-123"></i></span>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?= $_SESSION['user']['postal_code'] ?? ''; ?>" placeholder="Veuillez indiquer votre code postal" required> <!-- Correction ici -->
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="country" class="form-label mb-3">Pays :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-globe"></i></span>
                                        <input type="text" class="form-control" id="country" name="country" value="<?= $_SESSION['user']['country'] ?? ''; ?>" placeholder="Veuillez indiquer le nom du pays dans lequel vous vivez" required>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="avatar" class="form-label mb-3">Avatar :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-image"></i></span>
                                        <input type="file" class="form-control" id="avatar" name="avatar">
                                    </div>
                                    <?php if (!empty($_SESSION['user']['avatar'])): ?>
                                        <img src="<?= $_SESSION['user']['avatar']; ?>" alt="Avatar de l'utilisateur" class="mt-3 rounded-circle" width="100">
                                    <?php endif; ?>
                                </div>

                                <div class="mb-3 text-center">
                                    <a href="/forgot-password" class="text-muted">Mot de passe oublié ?</a>
                                </div>
                                <div class="text-center my-5">
                                    <button type="submit" class="button">Sauvegarder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center my-5">
                        <a href="/">
                            <button class="button">Retour vers la page d'accueil</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
