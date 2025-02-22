
<?php
     include 'partials/header.php'; 
     require_once __DIR__ . '/../config/config.php';
?>

<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alert alert-success text-center">
            Votre message a bien été envoyé !
        </div>
<?php endif; ?>

<main>
    <section class="mainSection">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h1 class="text-center text-muted mb-5">Formulaire de contact</h1>
                <div class="col-md-12">
                    <form class="border rounded-5 p-5 d-flex align-center justify-items-center" action="/contact" method="POST">
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="/assets/img/form/contact.svg" alt="Illustration contact" class="img-fluid w-100" style="object-fit:cover;">
                        </div>
                            <div class="col-md-6 my-5">  
                                <div class="mb-3">
                                    <label for="name" class="form-label mb-3">Nom</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="firstName" class="form-label mb-3">Prénom</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label mb-3">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required> 
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label mb-3">Message</label>
                                    <textarea class="form-control" id="message" name="message" required></textarea>
                                </div>
                                <div class="text-center my-5">
                                    <button type="submit" class="button">Envoyer</button>
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
