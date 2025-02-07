<?php include 'partials/header.php'; ?>

<main>
    <section class="mainSection">
        <div class="container">
            <div class="row">
                <h1 class="text-center text-muted mb-5">Login</h1>
                <div class="col-md-12">
                    <form action="/login" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" required> 
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required> 
                        </div>
                        <div class="text-center my-5">
                            <button type="submit" class="button">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
