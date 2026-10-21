<?php
$status   = $_GET["status"] ?? "";
$errorMsg = $_GET["msg"] ?? "";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GLKolors, artisan peintre à limoges. Peinture intérieure, extérieure et décoration. Devis gratuit.">
    <meta name="keywords" content="peintre, artisan, peinture intérieure, façade, décoration, limoges">
    <meta name="author" content="GLKolors">
    <!-- Open Graph (partage Facebook/LinkedIn) -->
    <meta property="og:title" content="GL Kolors - Artisan Peintre">
    <meta property="og:description" content="Peinture intérieure, extérieure et décoration.">
    <meta property="og:image" content="./backend/images/logo-rec.webp">
    <meta property="og:url" content="https://www.glkolors.fr">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GLKolors - Artisan Peintre">
    <meta name="twitter:description" content="Peinture intérieure, extérieure et décoration.">
    <title>Glkolors</title>
    <link rel="icon" href="./backend/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-18136404056"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-18136404056');
</script>

<body>
    <header>
        <div class="main-logo">
            <img src="./backend/images/logo-rec.webp" alt="logo entreprise">
        </div>
        <nav>
            <a href="#accueil" id="nav-link-home">Accueil</a>
            <a href="#apropos">A propos</a>
            <a href="#prestations">Prestations</a>
            <a href="#realisations">Réalisations</a>
            <a href="#avis">Avis</a>
        </nav>
        <div class="tel-devis">
            <a href="tel:06 02 66 15 68" class="tel"><i class="fa-solid fa-phone"></i>06 02 66 15 68</a>
            <a class="btn-devis" href="#devis">Demander un devis</a>
        </div>
        <button id="btn-menu"><i class="fa-solid fa-bars"></i></button>
    </header>
    <div class="nav-mobile">
        <a href="#accueil" id="nav-link-home">Accueil</a>
        <a href="#apropos">A propos</a>
        <a href="#prestations">Prestations</a>
        <a href="#realisations">Réalisations</a>
        <a href="#avis">Avis</a>
        <a class="btn-devis" href="#devis">Demander un devis</a>
        <a href="tel:06 02 66 15 68" class="tel"><i class="fa-solid fa-phone"></i>06 02 66 15 68</a>
    </div>
    <main>
        <section id="accueil">
            <div class="hero-container">
                <div class="hero-left">
                    <h1>
                        Peintre en bâtiment à Limoges : <em class="p-int">peinture intérieure</em> et <em class="p-ext">extérieure</em>
                    </h1>
                    <p class="hero-desc">
                        Artisan peintre en bâtiment à Limoges, GLKOLORS réalise vos travaux de peinture intérieure et extérieure pour particuliers et professionnels. Nous intervenons à Limoges et ses alentours pour vos projets de rénovation, décoration et remise en peinture.
                    </p>
                    <!-- <a href="#devis">Parler de mon projet <i class="fa-solid fa-angle-right"></i></a> -->
                    <div class="services">
                        <div class="service">
                            <div class="chiffre">5+</div>
                            <div class="title">Ans d'expérience</div>
                        </div>
                        <div class="service">
                            <div class="chiffre">200+</div>
                            <div class="title">Chantiers réalisés</div>
                        </div>
                        <div class="service">
                            <div class="chiffre">99%</div>
                            <div class="title">Clients satisfaits</div>
                        </div>
                    </div>
                </div>
                <div class="hero-right">
                    <div class="img-wraper">
                        <img src="./backend/images/unsplash.webp" alt="image-hero">
                        <div class="badge">
                            <div class="logo">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="infos">
                                <div class="title">Artisan Certifié</div>
                                <p>Garantie décennale sur tous nos travaux.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="apropos">
            <div class="container-apropos">
                <div class="sec-left">
                    <h2>Notre Histoire</h2>
                    <div class="divider"></div>
                    <p class="sec-desc">Chez Glkolors, nous mettons notre savoir-faire et notre créativité au service de vos projets depuis plus de 5 ans. Spécialisés dans les travaux de peinture intérieure et extérieure, nous associons les techniques les plus modernes à des idées fraîches et tendances pour transformer chaque espace en un lieu unique.</p>
                    <p class="sec-desc">Notre objectif : offrir des finitions soignées, durables et élégantes, adaptées à vos envies et à votre style. Que ce soit pour une rénovation, une décoration contemporaine ou un projet neuf, nous travaillons avec passion, précision et des matériaux de qualité afin de garantir un résultat à la hauteur de vos attentes.</p>
                </div>
                <div class="img-wraper">
                    <img src="./backend/images/notre-histoire.webp" alt="Image section apropos">
                </div>
            </div>
        </section>
        <section id="prestations">
            <h2>Nos prestations de peinture à Limoges</h2>
            <p class="sec-desc">Particuliers ou professionnels, nous vous accompagnons dans vos projets de rénovation et de décoration, en intérieur comme en extérieur, à Limoges et dans ses alentours.</p>
            <div class="container-card">
                <?php
                $json = file_get_contents("./backend/data.json");
                $data = json_decode($json, true);
                foreach ($data["prestations"] as $service) {
                ?>
                    <div class="card">
                        <img src="<?php echo $service["image"] ?>" alt="<?php echo $service["name"] ?>">
                        <div class="infos">
                            <h3><?php echo $service["name"] ?></h3>
                            <p><?php echo $service["desc"] ?></p>
                            <a class="<?php echo $service["class"] ?>" href="#devis"><?php echo $service["lien"] ?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <section id="apropos-atelier">
            <div class="container-sec">
                <div class="sec-left">
                    <div class="badge">Pourquoi Glkolors</div>
                    <h2>Un artisan qui vous conseille, du choix des couleurs aux finitions</h2>
                    <div class="desc">Un seul interlocuteur du premier rendez-vous à la fin du chantier. On prend le temps de comprendre votre projet, de vous conseiller, puis de livrer un travail dont on est fier.</div>
                    <div class="infos">
                        <?php foreach ($data["engagements"] as $engagement) { ?>
                            <div class="info">
                                <i class="<?= htmlspecialchars($engagement["icon"]) ?>" aria-hidden="true"></i>
                                <h3><?= htmlspecialchars($engagement["title"]) ?></h3>
                                <p><?= htmlspecialchars($engagement["desc"]) ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="sec-right">
                    <div class="img-wraper">
                        <img src="./backend/images/apropos-atelier.webp" alt="">
                        <?php
                        $bestReview = [
                            [
                                "note" => 0,
                                "message" => ""
                            ]
                        ];
                        foreach ($data["avis"] as $review) {
                            if ($review["note"] > $bestReview["note"] && strlen($review["message"]) > strlen($bestReview["message"])) {
                                $bestReview = $review;
                            }
                        }
                        ?>
                        <div class="avis">
                            <div class="stars">
                                <?php
                                for ($i = 0; $i < $bestReview["note"]; $i++) {
                                    if ($i <= $bestReview["note"]) { ?>
                                        <i class="fa-solid fa-star"></i>
                                    <?php } else { ?>
                                        <i class="fa-regular fa-star"></i>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <p>« <?= $bestReview["message"] ?> »</p>
                            <span><?= $bestReview["name"] ?> . avis Google</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="realisations">
            <h2>Nos réalisations à Limoges</h2>
            <div>
                <div class="sec-desc">Découvrez la qualité de nos finitions à travers nos récents chantiers.</div>
            </div>
            <div class="container-slider">
                <div class="sliders">
                    <?php
                    foreach ($data["realisations"] as $rea) {
                    ?>
                        <div class="slider">
                            <img src="<?php echo $rea["image"] ?>" alt="Image travaux réalisé">
                        </div>
                    <?php } ?>

                </div>
                <div class="btn-slider">
                    <button class="btn-previous" aria-label="bouton-precedant"><i class="fa-solid fa-angle-left"></i></button>
                    <button class="btn-next" aria-label="bouton-suivant"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
        </section>
        <section id="avis">
            <h2>Avis Clients</h2>
            <div class="stars">
                <?php
                $avisStats = $data["avis-googles"];
                $reviewRating = $avisStats["note"];

                for ($i = 0; $i < $reviewRating; $i++) {
                    if ($i <= $reviewRating) { ?>
                        <i class="fa-solid fa-star"></i>
                    <?php } else { ?>
                        <i class="fa-regular fa-star"></i>
                    <?php } ?>
                <?php } ?>

            </div>
            <p class="sec-desc"><em><?= $reviewRating ?>/5</em> sur <?= $avisStats["total"] ?> avis Google</p>
            <div class="container-card-avis">
                <div class="avis-track">
                    <?php
                    $avis  = $data["avis"];
                    $index = 0;
                    foreach ($avis as $avi) { ?>
                        <div class="card-avis">
                            <div class="infos">
                                <div class="stars">
                                    <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= $avi["note"]) { ?>
                                            <i class="fa-solid fa-star"></i>
                                        <?php } else { ?>
                                            <i class="fa-regular fa-star"></i>
                                    <?php }
                                    } ?>
                                </div>
                                <p>« <?php echo $avi["message"] ?> »</p>
                                <div class="info">
                                    <div class="avis-person"><?php echo $avi["name"] ?></div>
                                    <span>Avis de Google</span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="buttons">
                <a class="btn-avis-google" href="<?= $avisStats["lien"] ?>" target="_blank">Voir les <?= $avisStats["total"] ?> avis sur Google <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                <a class="btn-add-avis" href="<?= $avisStats["lien"] ?>" target="_blank">Vous êtes client ? Laissez-nous un avis</a>
            </div>
        </section>
        <section id="devis">
            <div class="container-form">
                <div class="form-left">
                    <div class="top">
                        <h2>Un projet de peinture ? Parlons-en.</h2>
                        <p class="sec-desc">Laissez simplement votre numéro pour être rappelé, ou décrivez votre projet pour recevoir un devis détaillé.</p>
                        <div class="container-appel">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="label">
                                <span>Ou appelez directement</span>
                                <a href="tel:06 02 66 15 68">06 02 66 15 68</a>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="container-info">
                            <i class="fa-solid fa-check"></i>
                            Devis gratuit et sans engagement
                        </div>
                        <div class="container-info">
                            <i class="fa-solid fa-check"></i>
                            Réponse sous 48h
                        </div>
                        <div class="container-info">
                            <i class="fa-solid fa-check"></i>
                            Limoges et alentours
                        </div>
                    </div>
                </div>
                <div class="form-right">
                    <h3>Demande de Devis Gratuit</h3>
                    <form action="./backend/send-mail.php" method="post">
                        <div class="rows">
                            <div class="row">
                                <label for="name">Nom & Prénom</label>
                                <input id="name" name="name" type="text" placeholder="Jean Dupont">
                            </div>
                            <div class="row">
                                <label for="tel">Téléphone</label>
                                <input id="tel" name="tel" type="phone" placeholder="06 XX XX XX XX">
                            </div>
                        </div>
                        <div class="row">
                            <label for="mail">Adresse Email</label>
                            <input id="mail" name="mail" type="email" placeholder="jean.dupont@gmail.com">
                        </div>
                        <div class="row">
                            <label for="type">Type de travaux</label>
                            <select name="type" id="type">
                                <option value="">Sélectionnez une prestation</option>
                                <option value="Interieur">Intérieur</option>
                                <option value="Exterieur">Extérieur</option>
                                <option value="Decoration">Décoration</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="msg">Détails du projet</label>
                            <textarea name="msg" id="msg" placeholder="Décrivez brièvement les pièces à peindre, la surface approximative, l'état des murs..."></textarea>
                        </div>
                        <button type="submit">Envoyer ma demande</button>
                        <?php if ($status === "success"): ?>
                            <div class="alert success">
                                <i class="fa-solid fa-circle-check"></i>
                                Votre demande a bien été envoyée ! Nous vous recontacterons sous 48h.
                            </div>
                        <?php elseif ($status === "error"): ?>
                            <div class="alert error">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <?php echo htmlspecialchars($errorMsg) ?: "Une erreur est survenue. Veuillez réessayer ou nous contacter par téléphone." ?>
                            </div>
                        <?php endif; ?>
                        <p>Vos données sont protégées et ne seront utilisées que pour répondre à votre demande.</p>
                    </form>
                </div>
            </div>
        </section>
        <section id="zone-intervention">
            <div class="container-left">
                <div class="zone-schema">
                    <svg viewBox="0 0 440 440" role="img" aria-labelledby="zone-titre">
                        <title id="zone-titre">Zone d'intervention autour de Limoges</title>

                        <circle cx="220" cy="220" r="205" class="zs-fond" />
                        <circle cx="220" cy="220" r="150" class="zs-rayon" />
                        <circle cx="220" cy="220" r="80" class="zs-rayon" />

                        <g class="zs-points">
                            <circle cx="360" cy="215" r="6" />
                            <circle cx="325" cy="128" r="6" />
                            <circle cx="112" cy="120" r="6" />
                            <circle cx="110" cy="318" r="6" />
                            <circle cx="196" cy="370" r="6" />
                            <circle cx="326" cy="314" r="6" />
                        </g>

                        <g class="zs-communes" text-anchor="middle">
                            <text x="360" y="242">Panazol</text>
                            <text x="325" y="110">Le Palais-sur-Vienne</text>
                            <text x="112" y="102">Couzeix</text>
                            <text x="110" y="345">Isle</text>
                            <text x="196" y="397">Condat-sur-Vienne</text>
                            <text x="326" y="341">Feytiat</text>
                        </g>

                        <circle cx="220" cy="220" r="30" class="zs-halo" />
                        <circle cx="220" cy="220" r="11" class="zs-centre" />
                        <text x="220" y="262" text-anchor="middle" class="zs-limoges">Limoges</text>
                    </svg>
                </div>
            </div>
            <div class="container-right">
                <span class="badge">Zone d'intervention</span>
                <h2>Peintre en bâtiment à Limoges et alentours</h2>
                <p>GLKOLORS intervient chez les particuliers et les professionnels à Limoges et dans les communes voisines : Panazol, Isle, Couzeix, Feytiat, Le Palais-sur-Vienne, Condat-sur-Vienne…</p>
                <p>Murs et plafonds, façades, boiseries et menuiseries, papiers peints et enduits décoratifs : chaque chantier commence par une préparation soignée des supports, pour des finitions qui durent.</p>
                <p>Votre commune n’est pas citée ? <a href="#devis">Contactez-nous</a>, nous étudions chaque demande.</p>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-top">
            <div class="f-left">
                <div class="main-logo">
                    <img src="./backend/images/logo-rec.webp" alt="logo entreprise">
                </div>
                <div class="sec-desc">Votre artisan peintre de confiance pour tous vos projets de rénovation.</div>
            </div>
            <div class="f-right">
                <div>
                    <h4>Services</h4>
                    <ul>
                        <li>Peinture Intérieure</li>
                        <li>Ravalement de façade</li>
                        <li>Pose de papier peint</li>
                        <li>Revêtements de sol</li>
                    </ul>
                </div>
                <div>
                    <h4>L'entreprise</h4>
                    <ul>
                        <li><a href="#realisations">Nos réalisations</a></li>
                        <li><a href="#avis">Avis clients</a></li>
                        <li><a href="#devis">Demander un devis</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="tel:06 02 66 15 68">06 02 66 15 68</a></li>
                        <li><a href="mailto:Glkolors.artisan@gmail.com">Glkolors.artisan@gmail.com</a></li>
                        <li>47 chemins des fonts saladas</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            © 2026 Glkolors. Tous droits réservés. &nbsp;|&nbsp;
            <a href="mentions-legales.php">Mentions légales</a>
        </div>
    </footer>
    <script src="./script/main.js"></script>
    <script src="./script/carrousel.js"></script>
</body>

</html>