<?php include 'partials/headerWithModifiedNav.php'; ?>

<main>
    <section class="mainContent">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h1 class="text-center text-muted my-5">Inscription</h1>
                <div class="col-md-6 my-5">
                    <form class="border rounded-5 p-5" action="/signup" method="post" autocomplete="off">
                        <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']; ?>">
                        <div class="mb-3">
                            <label for="username" class="form-label">Nom d'utilisateur :</label>
                            <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe :</label>
                            <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
                        </div>
                        <div class="mb-5">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="button">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>