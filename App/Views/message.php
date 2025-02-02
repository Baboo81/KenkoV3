<?php include 'partials/header.php'; ?>
<main>
    <section class="mainSection">
        <div class="container">
            <div class="row">
                <h1 class="text-center mb-5">Messages reçus</h1>
                <div class="col-md-12">
                    <?php if (!empty($messages)): ?>
                        <ul>
                            <?php foreach ($messages as $message): ?>
                                <li>
                                    <strong>Nom:</strong><?php echo $message['name']; ?><br />
                                    <strong>Prénom:</strong><?php echo $message['firstName']; ?><br />
                                    <strong>Email:</strong><?php echo $message['email']; ?><br />
                                    <strong>Message:</strong><?php echo $message['message']; ?><br />
                                    <strong>Date:</strong><?php echo $message['created_at']; ?>
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