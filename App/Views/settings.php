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




<?php include 'partials/headerWithModifiedNav.php'; ?>

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
                    <form class="border rounded-5 p-5 d-flex align-center justify-items-center" action="/settings" method="post" enctype="multipart/form-data" autocomplete="off">
                            <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']; ?>">
                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                <img src="/assets/img/form/paramètres.svg" alt="Illustration contact" class="img-fluid w-100" style="object-fit:cover;">
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="lastname" class="form-label mb-3">Nom :</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $_SESSION['user']['lastname'] ?? ''; ?>" required>
                                </div>
                                <div class="mb-5">
                                    <label for="firstname" class="form-label mb-3">Prénom :</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $_SESSION['user']['firstname'] ?? ''; ?>" required>
                                </div>
                                <div class="mb-5">
                                    <label for="email" class="form-label mb-3">Adresse email:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['user']['email'] ?? ''; ?>" required>
                                </div>
                                <div class="mb-5">
                                    <label for="address" class="form-label mb-3">Adresse :</label> <!-- Changement ici -->
                                    <input type="text" class="form-control" id="address" name="address" value="<?= $_SESSION['user']['address'] ?? ''; ?>" required> <!-- Changement ici -->
                                </div>
                                <div class="mb-5">
                                    <label for="city" class="form-label mb-3">Ville :</label>
                                    <input type="text" class="form-control" id="city" name="city" value="<?= $_SESSION['user']['city'] ?? ''; ?>" required>
                                </div>
                                <div class="mb-5">
                                    <label for="postal_code" class="form-label mb-3">Code Postal :</label> <!-- Correction ici -->
                                    <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?= $_SESSION['user']['postal_code'] ?? ''; ?>" required> <!-- Correction ici -->
                                </div>
                                <div class="mb-5">
                                    <label for="country" class="form-label mb-3">Pays :</label>
                                    <input type="text" class="form-control" id="country" name="country" value="<?= $_SESSION['user']['country'] ?? ''; ?>" required>
                                </div>
                                <div class="mb-5">
                                    <label for="avatar" class="form-label mb-3">Avatar :</label>
                                    <input type="file" class="form-control" id="avatar" name="avatar">
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
