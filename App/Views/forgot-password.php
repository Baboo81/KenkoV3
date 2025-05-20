<?php 
    include 'partials/hender.php';
?>

<main>
    <section class="mainContent">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h1 class="text-center text-muted my-5">Mot de passe oublié</h1>
                <section>
                    <?php if (isset($_GET['success'])): ?>
                        <div class="alert alert-seccess">
                            <p>Si l'adresse email existe, un lien de réinitialisation vous à été envoyé !</p>
                        </div>
                    <?php elseif (isset($_GET['error'])): ?>
                        <div class="alert alert-danger">
                            <p>Une erreur s'est produite ! Veuillez réessayer !</p>
                        </div>
                    <?php endif; ?>
                </section>
                <div class="col-md-12 my-5">
                    <form class="rounded-5 p-5 d-flex align-center justify-items-center" action="/forgot-password" method="post" autocomplete="off">
                        <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']; ?>">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="/assets/img/form/forgotPassword.svg" alt="Illustration mot de passe oublié" class="img-fluid w-100" style="object-fit:cover;">
                        </div>
                        <div class="col-md-6 col-12 my-5">
                            <section class="my-5">
                                <div class="mb-4">
                                    <label for="email" class="form-label mb-3">Email :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Veuillez indiquer votre adresse mail" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="button">Envoyer un lien/button>
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