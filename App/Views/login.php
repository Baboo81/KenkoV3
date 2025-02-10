<?php include 'partials/headerWithModifiedNav.php'; ?>

<main>
    <section class="mainSection">
        <div class="container">
            <!-- Affichage des messages d'erreurs et de success -->
            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-<?= $_SESSION['message']['type']; ?> alert-dismissible fade show text-center" role="alert">
                    <?= $_SESSION['message']['text']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['message']); ?> <!-- Supprimer le message après affichage -->
            <?php endif; ?>

            <div class="row justify-content-center align-items-center">
                <h1 class="text-center text-muted mb-5">Login</h1>
                <div class="col-md-6 my-5">
                    <form class="border rounded-5 p-5" action="/login" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label mb-3">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" required> 
                        </div>
                        <div class="mb-5">
                            <label for="password" class="form-label mb-3">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required> 
                        </div>
                        <div class="text-center">
                            <button type="submit" class="button">Se connecter</button>
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
