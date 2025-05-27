<?php 
    include 'partials/header.php';
?>

<main>
    <section class="mainContent">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h1 class="text-center text-muted my-5">Réinitialiser votre mot de passe</h1>
                <section>
                    <?php if (isset($_GET['error'])): ?>
                        <div class="alert alert-danger text-center">
                            Une erreur est survenue ! Veuillez vérifiez que les champs soient bien remplis !
                        </div>
                    <?php endif; ?>
                </section>
                <div class="col-md-12 my-5">
                    <form class="rounded-5 p-5 d-flex align-center justify-items-center" action="/reset-password" method="post" autocomplete="off">
                        <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']; ?>">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="/assets/img/form/forgotPassword.svg" alt="Illustration mot de passe oublié" class="img-fluid w-100" style="object-fit:cover;">
                        </div>
                        <div class="col-md-6 col-12 my-5">
                            <section class="my-5">
                                <div class="mb-4">
                                    <label for="password" class="form-label mb-3">Nouveau mot de passe</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-password"></i></span>
                                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Veuillez indiquer le nouveau mot de passe" required>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="confirm_password" class="form-label mb-3">Confirmez le nouveau mot de passe</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-password"></i></span>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" autocomplete="off" placeholder="Veuillez confirmez votre nouveau mot de passe" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="button">Réinitialiser</button>
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