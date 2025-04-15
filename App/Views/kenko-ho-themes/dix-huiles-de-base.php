<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/../partials/navBar.php'; ?>

<?php 
use App\data;

    $air = include __DIR__ . '/../../data/air.php'; 
    $mentheP = include __DIR__ . '/../../data/mentheP.php';
    $onGuard = include __DIR__ . '/../../data/onGuard.php';
    $origan = include __DIR__ . '/../../data/origan.php';
    $zenGest = include __DIR__ . '/../../data/zenGest.php';
    $deepBlue = include __DIR__ . '/../../data/deepBlue.php';
?>

<main>
    <section class="mainSection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainTitleContent mb-5">
                        <h2 class="text-muted text-center mb-5">Présentation des 10 huiles du kit famille</h2>
                        <div class="line"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="my-5">
                    <div class="box rounded-5 p-4 my-5">
                        <div class="row d-flex align-items-center">
                        <?php foreach ($air as $key => $airTemp): ?>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3><?php echo $airTemp['title']; ?></h3>
                                </div>
                                <div class="text-start mb-3">
                                    <h4>Composition :</h4>
                                </div>
                                <p class="text-muted"><?php echo $airTemp['composition']; ?></p>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $airTemp['usage_1']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $airTemp['usage_2']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $airTemp['usage_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $airTemp['usage_4']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0; &#9788; <?php echo $airTemp['usage_5']; ?></p>
                                </div>
                            </article>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" style="object-fit: cover;" src="<?php echo $airTemp['img']; ?>" alt="Image représantant une personne tenant un flacon de Air">
                            </div>
                            <?php endforeach; ?> 
                        </div>
                        <div class="row d-flex align-items-center mb-5">
                            <?php foreach ($mentheP as $key1 => $menthePTemp): ?>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="<?php echo $menthePTemp['img']; ?>" alt="Image représantant un un flacon de menthe poivrée">
                            </div>
                            <article class="col-md-8 text-md-end">
                                <div class="text-center mb-5">
                                    <h3><?php echo $menthePTemp['title']; ?></h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="text-start mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $menthePTemp['usages_1']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $menthePTemp['usages_2']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $menthePTemp['usages_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $menthePTemp['usages_4']; ?></p>
                                </div>
                            </article>
                            <?php endforeach; ?> 
                        </div>
                        <div class="row d-flex align-items-center">
                            <?php foreach ($onGuard as $key2 => $onGuardTemp): ?> 
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3><?php echo $onGuardTemp['title']; ?></h3>
                                </div>
                                <div class="text-start mb-3">
                                    <h4>Composition :</h4>
                                </div>
                                <p class="text-muted"><?php echo $onGuardTemp['composition']; ?></p>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $onGuardTemp['usage_1']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $onGuardTemp['usage_2']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $onGuardTemp['usage_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $onGuardTemp['usage_4']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0; &#9788; <?php echo $onGuardTemp['danger']; ?></p>
                                </div>
                            </article>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="<?php echo $onGuardTemp['img']; ?>" alt="Image représantant une partie de la gamme OnGuard">
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row d-flex align-items-center">
                            <?php foreach ($origan as $key3 => $origanTemp): ?>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="<?php echo $origanTemp['img']; ?>" alt="Image représantant un flacon d'origan">
                            </div>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3><?php echo $origanTemp['title']; ?></h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $origanTemp['usage_1']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $origanTemp['usage_2']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $origanTemp['usage_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $origanTemp['usage_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0;<?php echo $origanTemp['danger']; ?></p>
                                </div>
                            </article>
                            <?php endforeach; ?>
                        </div>
                        <div class="row d-flex align-items-center mt-5">
                            <?php foreach ($zenGest as $key4 => $zenGestTemp): ?>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3><?php echo $zenGestTemp['title']; ?></h3>
                                </div>
                                <div class="text-start mb-3">
                                    <h4>Composition :</h4>
                                </div>
                                <p class="text-muted"><?php echo $zenGestTemp['composition']; ?></p>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $zenGestTemp['usage_1']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $zenGestTemp['usage_2']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $zenGestTemp['usage_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $zenGestTemp['usage_4']; ?></p>
                            </article>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="<?php echo $zenGestTemp['img']; ?>" alt="Image représantant un flacon de ZenGest">
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="/../assets/img/services/Kenko-Ho/pageDixHuiles/Lavande.jpg" alt="Image représantant une personne qui cuisine">
                            </div>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3>La Lavande</h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En topique : 1 à 2 gttes dans un gel d'aloé-véra pour soulager les coups de soleil ou les piqûres d'insectes.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En diffusion, la lavande est calmante, relaxante.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Efficace contre les inconforts saisonniers en association avec la menthe poivrée et le citron.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Efficace pour calmer les irritations de la peau.</p>
                                </div>
                            </article>
                        </div>
                        <div class="row d-flex align-items-center mt-5">
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3>Le mélange : Deep Blue</h3>
                                </div>
                                <div class="text-start mb-3">
                                    <h4>Composition :</h4>
                                </div>
                                <p class="text-muted">Gaulthérie (Wintergreen), Camphrier, Menthe poivrée, Ylang Ylang, Tanaisie annuelle (Blue Tansy), Camomille Matricaire, Hélichryse, Osmanthus.</p>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleT mx-2">T</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Ce mélange est idéal pour soulager les tensions musculaires ou les articulations capricieuses.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En massage : 1 à 2 gttes dans une HV puis appliquez localement.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Idéale pour préparer les muscles des jambes avant le sport.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0; Á éviter s'il y a des allergies aux salicylés (aspirine).</p>
                            </article>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="/../assets/img/services/Kenko-Ho/pageDixHuiles/DeepBlue.jpg" alt="Image représantant une personne qui cuisine">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="/../assets/img/services/Kenko-Ho/pageDixHuiles/Encen.jpg" alt="Image représantant une personne qui cuisine">
                            </div>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3>L'Encens</h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Soutien cellulaire et des défenses naturelles.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En diffusion, elle se marie bien avec toutes les huiles et procure un effet anxiolytique.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En topique dans une crème, elle permet d'éliminer les tâches, anti-rides (anti-oxydant).</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En interne : 1 gtte en bouche pour un effet relaxant.</p>
                                </div>
                            </article>
                        </div>
                        <div class="row d-flex align-items-center mt-5">
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3>Le Tea-Tree</h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Le Trea-Tree est très efficace contre les maux de gorge et oreilles ou dans le cadre de souci bucco-dentaire.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En topique : acné, boutons.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Soutien les défenses naturelles.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0; En diffusion : à éviter en présence de chats.</p>
                            </article>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="/../assets/img/services/Kenko-Ho/pageDixHuiles/TeaTree.jpg" alt="Image représantant une personne qui cuisine">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="/../assets/img/services/Kenko-Ho/pageDixHuiles/Citron.jpg" alt="Image représantant une personne qui cuisine">
                            </div>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3>Le Citron</h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Soutien les défenses naturelles, action détox sur le métabolisme.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Stimulant digestif.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En topique : 1 gtte dans de l'HV en massage sur les lobes d'oreilles pour un effet décongestionnant nasal.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En diffusion : donne un coup de fouet avec la menthe poivrée.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0; &#9788; Photosensibilisant, dermocaustique.</p>
                                </div>
                            </article>
                        </div>
                        <div class="text-center my-5">
                            <a href="/../assets/pdf/pageDixHuilesDeBase/kitFamille.pdf" download="kitFamille.pdf">
                                <button class="button">Télécharger le PDF</button>
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-auto">
                        <button onclick="window.location.href='/kenko-ho';" class="button">Retourner vers Kenko-Ho</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>