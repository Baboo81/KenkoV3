<?php include __DIR__ . '/../partials/header.php'; ?>
<?php include __DIR__ . '/../partials/navBar.php'; ?>

<?php 
    $huiles = include __DIR__ . '/../data/huiles_base.php'; 
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
            <?php foreach ($huiles as $huile): ?>
            <div class="row">
                <div class="my-5">
                    <div class="box rounded-5 p-4 my-5">
                        <div class="row d-flex align-items-center">
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3><?php echo $huile['nom']; ?></h3>
                                </div>
                                <div class="text-start mb-3">
                                    <h4>Composition :</h4>
                                </div>
                                <p class="text-muted"><?php echo ['composition']; ?></p>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Soutien de la sphère O.R.L.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Assainissant atmosphérique.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En topique, diluer avec une huile végétale (HV) sur le torse pour ouvrir les voies respiratoires, atténuer la toux, déboucher le nez.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Masque sec : 1 goutte (gtte) dans les mains puis placez les mains sur le nez et inhalez.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0; &#9788; Photosensibilisant.</p>
                                </div>
                            </article>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" style="object-fit: cover;" src="/../assets/img/services/Kenko-Ho/pageDixHuiles/Air.jpg" alt="Image représantant une personne qui cuisine">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center mb-5">
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="/../assets/img/services/Kenko-Ho/pageDixHuiles/MenthePoivrée.jpg" alt="Image représantant une personne qui cuisine">
                            </div>
                            <article class="col-md-8 text-md-end">
                                <div class="text-center mb-5">
                                    <h3>La Menthe Poivrée</h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="text-start mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Pour donner un coup de fouet : 1 gtte directement sur le palais.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Pour soulager les maux de tête : 1 gtte en massage sur les tempes, le front et la nuque.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En cas d'inconfort digestif : 1 à 2 gttes dans de l'eau.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En diffusion : 2 gttes pour retrouver optimisme, vivacité et joie.</p>
                                </div>
                            </article>
                        </div>
                        <div class="row d-flex align-items-center">
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3>Le mélange : OnGuard</h3>
                                </div>
                                <div class="text-start mb-3">
                                    <h4>Composition :</h4>
                                </div>
                                <p class="text-muted">Orange sauvage, Clou de girofle, Cannelle de Chine, Eucalyptus, Romarin.</p>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Soutien les défenses immunitaires.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Sur le plan émotionnel, ce mélange va aider à poser ses limites afin de protéger votre espace personnel des énergies négatives.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En diffusion pour assainir l'air.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En massage dilué dans une HV quand le corps faiblit.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0; &#9788; Photosensibilisant, dermocaustique.</p>
                                </div>
                            </article>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="/../assets/img/services/Kenko-Ho/pageDixHuiles/OnGuard.jpg" alt="Image représantant une personne qui cuisine">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="/../assets/img/services/Kenko-Ho/pageDixHuiles/Origan.jpg" alt="Image représantant une personne qui cuisine">
                            </div>
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3>L'Origan</h3>
                                </div>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Soutien puissant du système immunitaire.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En diffusion, elle renforce le sentiment de sécurité.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En cuisine pour aromatiser une sauce, trempez une pointe de cure dent dans le flacon et ensuite dans la sauce.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En topique : antifongique, virucide.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>&#x26A0; Dermocaustique à diluer impérativement.</p>
                                </div>
                            </article>
                        </div>
                        <div class="row d-flex align-items-center mt-5">
                            <article class="col-md-8">
                                <div class="text-center mb-5">
                                    <h3>Le mélange : ZenGest</h3>
                                </div>
                                <div class="text-start mb-3">
                                    <h4>Composition :</h4>
                                </div>
                                <p class="text-muted">Gingembre, Menthe poivrée, Estragon, Cumin, Coriandre, Anis.</p>
                                <div class="text-start my-3">
                                    <h4>Usages :<i class="circleA mx-3">A</i><i class="circleT mx-2">T</i><i class="circleI mx-2">I</i></h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>C'est le mélange qui va soutenir la sphère digestive à tous les niveaux.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En massage sur le ventre pour soulager les crampes et les ballonnements.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>Sur le plan émotionnel, il aide à digérer les expériences de la vie.</p>
                                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>En interne, 2 gttes dans de l'eau chaude en dessous de 60°C pour améliorer la digestion après un repas copieux ou trop arrosé.</p>
                            </article>
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="/../assets/img/services/Kenko-Ho/pageDixHuiles/ZenGest.jpg" alt="Image représantant une personne qui cuisine">
                            </div>
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