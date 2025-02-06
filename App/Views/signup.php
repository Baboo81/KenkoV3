<?php include 'partials/header.php'; ?>

<main>
    <section class="mainContent">
        <div class="container">
            <div class="row">
                <h1 class="text-center my-5">Inscription</h1>
                <div class="col-md-12">
                    <form action="/signup" method="$_POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Nom d'utilisateur :</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe :</label>
                            <input type="text" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="text-center my-5">
                            <button type="submit">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>