
<?php include 'partials/headerWithModifiedNav.php'; ?>

<main>
    <section class="mainContent">
        <div class="container">
            <div class="row">
                <h1 class="text-center text-muted my-5">Paramètres du compte</h1>
                <div class="col-md-12">
                    <form action="/settings" method="post" enctype="multipart/form-data" autocomplete="off">
                        <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']; ?>">

                        <div class="mb-3">
                            <label for="lastname" class="form-label">Nom :</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $_SESSION['user']['lastname'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Prénom :</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $_SESSION['user']['firstname'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['user']['email'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="adress" class="form-label">Adresse :</label>
                            <input type="text" class="form-control" id="adress" name="adress" value="<?= $_SESSION['user']['adress'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Ville :</label>
                            <input type="text" class="form-control" id="city" name="city" value="<?= $_SESSION['user']['city'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="postal_code" class="form-label">Code Postal :</label>
                            <input type="text" class="form-control" id="postal_code" name="postal__code" value="<?= $_SESSION['user']['postal_code'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Pays :</label>
                            <input type="text" class="form-control" id="country" name="country" value="<?= $_SESSION['user']['country'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar :</label>
                            <input type="file" class="form-control" id="avatar" name="avatar">
                            <?php if (!empty($_SESSION['user']['avatar'])): ?>
                                <img src="<?= $_SESSION['user']['avatar']; ?>" alt="Avatar de l'utilisateur" class="mt-3 rounded-circle" width="100">
                            <?php endif; ?>
                        </div>

                        <div class="mb-3 text-center">
                            <a href="/forgot-password" class="text-muted">Mot de passe oublié ?</a>
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
