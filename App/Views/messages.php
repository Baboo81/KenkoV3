<?php include 'partialls/header.php'; ?>
<main>
    <section class="mainSection">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Messages reçus</h1>
                <div class="col-md-12">
                    <?php if (empty($messages)): ?>
                        <p>Aucun messgaes pour le moment.</p>
                        <?php else: ?>
                            <ul>
                                <?php foreach ($messages as $message): ?>
                                    <li>
                                        <strong><?= htmlspecialchars($message['name']) ?> <?= htmlspecialchars($message['firstName']) ?></strong> - 
                                        <a href="mailto:<?= htmlspecialchars($message['email']) ?>"><?= htmlspecialchars($message['email']) ?></a><br>
                                        <em>Envoyé le <?= $message['created_at'] ?></em>
                                        <p><?= nl2br(htmlspecialchars($message['message'])) ?></p>
                                    </li> 
                                    <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'partials/footer.php'; ?>