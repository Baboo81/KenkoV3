<?php include 'partials/header.php'; ?>
  <!-- Affichage des messages d'erreurs et de success -->
  <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?= $_SESSION['message']['type']; ?> alert-dismissible fade show text-center" role="alert">
            <?= $_SESSION['message']['text']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
            <?php unset($_SESSION['message']); ?> <!-- Supprimer le message après affichage -->
    <?php endif; ?>

<main>
    <section class="mainSection">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h1 class="text-center text-muted mb-5">Login</h1>
                <div class="col-md-12 my-5">
                    <form class="rounded-5 p-5 d-flex align-center justify-items-center" action="/login" method="post">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="/assets/img/form/login.svg" alt="Illustration contact" class="img-fluid w-100" style="object-fit:cover;">
                        </div>
                        <div class="col-md-6 col-12 my-5">
                            <section class="my-5">
                                <div class="mb-3">
                                    <label for="email" class="form-label mb-3">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" required> 
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="password" class="form-label mb-3">Mot de passe</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required> 
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="button">Se connecter</button>
                                </div>
                                <div class="my-5 text-center">
                                    <a href="/forgot-password" class="text-muted">Mot de passe oublié ?</a>
                                </div>
                            </section>
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
