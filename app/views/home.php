<?php include 'partials/header.php' ?>
<?php include 'partials/navBar.php' ?>

<?php
    use App\data;
    
    $cardsData = include __DIR__ . '/../data/home.php';
    $cards = $cardsData['cards'];
?>

<!-- Affichage des messages de succès ou d'erreur -->
<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?= $_SESSION['message']['type']; ?> alert-dismissible fade show text-center" role="alert">
        <?= $_SESSION['message']['text']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); ?> <!-- Supprimer le message après affichage -->
<?php endif; ?>

<?php if (isset($_SESSION['message_logout'])): ?>
    <div class="alert alert-<?= $_SESSION['message_logout']['type']; ?> alert-dismissible fade show text-center" role="alert">
        <?= $_SESSION['message_logout']['text']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message_logout']); ?> <!-- Supprimer le message après affichage -->
<?php endif; ?>

    <body>
        <main>
            <section class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mainContent">
                            <h1 class="mainTitle"></h1>
                            <span class="secondTitle text-nowrap">Bienvenue dans deux univers ...</span>
                            <img src="./assets/img/logo/logoAnimate.svg" alt="Logo animé" id="logoAnimation">
                        </div>
                    </div>
                </div>
            </section>
            <section class="mainSection">
                <div class="container mw-100">
                    <div class="row">
                        <?php foreach ($cards as $card): ?>
                            <div class="col-md-12 <?= $card['title'] === 'KENKO-HO' ? 'part1' : 'part2'; ?>">
                                <div class="card rounded-4 <?= $card['title'] === 'KENKO-HO' ? 'bg-grey' : 'bg-blue'; ?> p-3" style="max-width: 55rem;">
                                    <div class="kenkoTitles">
                                        <h3 class="text-center my-5"><?= htmlspecialchars($card['title']) ?></h3>
                                    </div>
                                    <img src="<?= htmlspecialchars($card['img']) ?>" class="card-img-top rounded-3" alt="Image représentant un jardin zen">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title fs-1 text-center mb-5"><?= $card['title2'] ?></h5>
                                        <p class="card-text text-center"><?= $card['p1'] ?></p>
                                        <?php if (!empty($card['p2'])): ?>
                                            <p class="fontGreen text-center fw-bold my-3"><?= $card['p2'] ?></p>
                                        <?php endif; ?>

                                        <?php if ($card['title'] === 'KENKO-WEB'): ?>
                                            <div class="text-center my-5">
                                                <button onclick="window.location.href='/kenko-web';" class="button">Visiter Kenko-Web</button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </main>
    <?php include 'partials/cookie-banner.php' ?>
<?php include 'partials/footer.php' ?>