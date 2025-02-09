
<?php include 'partials/headerWithModifiedNav.php'; ?>

<main>
    <section class="mainContent">
        <div class="container">
            <div class="row">
                <h1 class="text-center text-muted my-5">Paramètres du compte</h1>
                <div class="col-md-12">
                    <form action="/settings" method="post" autocomplete="off">
                        <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']; ?>">
                        <div class="mb-3">
                            <label for="username" class="form-label">Nom :</label>
                            <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Prénom :</label>
                            <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse :</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Ville :</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Code Postal :</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email :</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Pays :</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar :</label>
                            <input type="file" class="form-control" id="avatar" name="avatar">
                        </div>
                        <div class="text-center my-5">
                            <button type="submit" class="button">Sauvegarder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
