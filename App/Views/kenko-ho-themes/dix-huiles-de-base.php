<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/../partials/navBar.php'; ?>

<?php 
use App\data;

    $air = include __DIR__ . '/../../data/air.php'; 
    $mentheP = include __DIR__ . '/../../data/mentheP.php';
    $onGuard = include __DIR__ . '/../../data/onGuard.php';
    $origan = include __DIR__ . '/../../data/origan.php';
    $zenGest = include __DIR__ . '/../../data/zenGest.php';
    $lavande = include __DIR__ . '/../../data/lavande.php';
    $deepBlue = include __DIR__ . '/../../data/deepBlue.php';
    $encens = include __DIR__ . '/../../data/encens.php';
    $teaTree = include __DIR__ . '/../../data/teaTree.php';
    $citron = include __DIR__ . '/../../data/citron.php';
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
                            <?php foreach ($lavande as $key5 => $lavandeTemp): ?>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="<?php echo $lavandeTemp['img']; ?>" alt="Image représantant un flacon de lavande">
                            </div>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3><?php echo $lavandeTemp['title']; ?></h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $lavandeTemp['usage_1']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $lavandeTemp['usage_2']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $lavandeTemp['usage_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $lavandeTemp['usage_4']; ?></p>
                                </div>
                            </article>
                            <?php endforeach; ?>
                        </div>
                        <div class="row d-flex align-items-center mt-5">
                            <?php foreach ($deepBlue as $key6 => $deepBlueTemp): ?>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3><?php echo $deepBlueTemp['title']; ?></h3>
                                </div>
                                <div class="text-start mb-3">
                                    <h4>Composition :</h4>
                                </div>
                                <p class="text-muted"><?php echo $deepBlueTemp['composition']; ?></p>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleT mx-2">T</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $deepBlueTemp['usage_1']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $deepBlueTemp['usage_2']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $deepBlueTemp['usage_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0;<?php echo $deepBlueTemp['danger']; ?></p>
                            </article>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="<?php echo $deepBlueTemp['img']; ?>" alt="Image représantant une partie de la gamme DeepBlue">
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row d-flex align-items-center">
                            <?php foreach ($encens as $key6 => $encensTemp): ?>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="<?php echo $encensTemp['img']; ?>" alt="Image représantant un flacon d'encens">
                            </div>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3><?php echo $encensTemp['title']; ?></h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $encensTemp['usage_1']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $encensTemp['usage_2']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $encensTemp['usage_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $encensTemp['usage_4']; ?></p>
                                </div>
                            </article>
                            <?php endforeach; ?>
                        </div>
                        <div class="row d-flex align-items-center mt-5">
                            <?php foreach ($teaTree as $key6 => $teaTreeTemp): ?>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3><?php echo $teaTreeTemp['title']; ?></h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $teaTreeTemp['usage_1']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $teaTreeTemp['usage_2']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $teaTreeTemp['usage_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0;<?php echo $teaTreeTemp['danger']; ?></p>
                            </article>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="<?php echo $teaTreeTemp['img']; ?>" alt="Image représantant un flacon de Tea-Tree">
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row d-flex align-items-center">
                            <?php foreach ($citron as $key7 => $citronTemp): ?>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="<?php echo $citronTemp['img']; ?>" alt="Image représantant deux flacons de Citron">
                            </div>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3><?php echo $citronTemp['title']; ?></h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $citronTemp['usage_1']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $citronTemp['usage_2']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $citronTemp['usage_3']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i><?php echo $citronTemp['usage_4']; ?></p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0; &#9788<?php echo $citronTemp['danger']; ?></p>
                                </div>
                            </article>
                            <?php endforeach; ?>
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