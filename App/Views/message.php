<?php require_once __DIR__ . '/../config/config.php'; ?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navBar.php'; ?>

<main>
    <section class="mainSection">
        <div class="container">
            <div class="row">
                <h1 class="text-center mb-5">Messages reçus</h1>
                <div class="col-md-12">
                    <?php if (!empty($messages)): ?>
                        <ul>
                            <?php foreach ($messages as $msg): ?>
                                <li>
                                    <strong>Nom:</strong><?php echo $msg['name']; ?><br />
                                    <strong>Prénom:</strong><?php echo $msg['first_name']; ?><br />
                                    <strong>Téléphone:</strong><?php echo $msg['tel']; ?><br />
                                    <strong>Email:</strong><?php echo $msg['email']; ?><br />
                                    <strong>Message:</strong><?php echo $msg['message']; ?><br />
                                    <strong>Date:</strong><?php echo $msg['created_at']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <div class="text-center">
                            <p>Aucun message reçu pour le moment !</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'partials/footer.php'; ?>