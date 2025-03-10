<?php include __DIR__ . '/../partials/headerWithModifiedNav.php'; 


//Vérifier si l'utilisateur est connecté
if (isset($_SESSION['user_id'])) {
    //Connexion à la DB ses préférences
    require_once __DIR__ .  '/../../Core/Database.php';

    $db = new \App\Core\Database();
    $pdo = $db->getInstance();

    $stmt = $pdo->prepare("SELECT cookie_preferences FROM users WHERE id = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $result = $stmt->fetch();

    $preferences = $result ? json_decode($result['cookie_preferences'], true) : ['analytics' => false, 'marketing' => false];

} else {
    //Récupération depuis les cookies si pas connecté
    $preferences = isset($_COOKIE['cookie_preferences'])
        ? json_decode($_COOKIE['cookie_preferences'], true)
        : ['analytics' => false, 'marketing' => false];
}

?>

<main>
    <section class="mainContent">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <?php if (isset($_GET['success'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        ✅ Vos préférences ont été mises à jour !
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <h1 class="text-center text-muted my-5">Gérer mes préférences pour les cookies </h1>
                <div class="col-md-12 my-5">
                    <form class="rounded-5 p-5 d-flex align-center justify-items-center" action="/cookies/cookie-preferences/save" method="post" autocomplete="off">
                        <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']; ?>">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="/assets/img/icons/cookies.svg" alt="Illustration cookie-préférences" class="img-fluid w-100" style="object-fit:cover;">
                        </div>
                        <div class="col-md-6 my-5">
                            <section class="my-5">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="analytics" id="analytics"
                                        <?= $preferences['analytics'] ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="analytics">
                                        Autoriser les cookies analytiques
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="marketing" id="marketing"
                                        <?= $preferences['marketing'] ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="marketing">
                                        Autoriser les cookies marketing 
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-5">
                                    <button type="submit" class="button">Enregistrer mes préférences</button>
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
