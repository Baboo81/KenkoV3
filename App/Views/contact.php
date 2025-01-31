<?php include 'partials/header.php'; ?>

<main>
    <section class="mainSection">
        <div class="container">
            <div class="row">
                <h1 class="text-center mb-5">Formulaire de contact</h1>
                <div class="col-md-12">
                    <form action="/contact" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="mb-3">
                            <label for="eamil" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required> 
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" required></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>