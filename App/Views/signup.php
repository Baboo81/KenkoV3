<?php include 'partials/headerWithModifiedNav.php'; ?>

<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?= $_SESSION['message']['type']; ?> alert-dismissible fade show text-center" role="alert">
        <?= $_SESSION['message']['text']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); ?> <!-- Supprimer le message après affichage -->
<?php endif; ?>

<main>
    <section class="mainContent">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h1 class="text-center text-muted my-5">Inscription</h1>
                <div class="col-md-12 my-5">
                    <form class="border rounded-5 p-5 d-flex align-center justify-items-center" action="/signup" method="post" autocomplete="off">
                        <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']; ?>">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="/assets/img/form/signup.svg" alt="Illustration contact" class="img-fluid w-100" style="object-fit:cover;">
                        </div>
                        <div class="col-md-6 my-5">
                            <section class="my-5">
                                <div class="mb-4">
                                    <label for="username" class="form-label mb-3">Nom d'utilisateur :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label mb-3">Mot de passe :</label>
                                    <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label mb-3">Email :</label>
                                    <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="button">S'inscrire</button>
                                </div>
                            </section>
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </form>
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