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
    <meta property="og:image" content="./backend/images/hero-image.webp">
    <meta property="og:url" content="https://tonsite.fr">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GLKolors - Artisan Peintre">
    <meta name="twitter:description" content="Peinture intérieure, extérieure et décoration.">
    <title>Glkolors</title>
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="main-logo">
            <img src="./backend/images/logo-rec.webp" alt="logo entreprise">
        </div>
        <nav>
            <a href="#accueil" id="nav-link-home">Accueil</a>
            <a href="#apropos">A propos</a>
            <a href="#realisations">Prestations</a>
            <a href="#prestations">Réalisations</a>
            <a href="#avis">Avis</a>
        </nav>
        <div class="tel-devis">
            <span class="tel"><i class="fa-solid fa-phone"></i>06 02 66 15 68</span>
            <a class="btn-devis" href="#devis">Demander un devis</a>
        </div>
    </header>
    <main>
        <section id="accueil">
            <div class="hero-container">
                <div class="hero-left">
                    <h1>
                        L'art de peindre vos espaces, avec
                        <em class="passion">passion</em> et
                        <em class="precision">précision</em>.
                    </h1>
                    <p class="hero-desc">
                        Interventions rapides, chantiers propres et conseils
                        couleurs personnalisés pour les particuliers et les professionnels.
                    </p>
                    <a href="#devis">Parler de mon projet <i class="fa-solid fa-angle-right"></i></a>
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
            <h2>Nos Prestations</h2>
            <p class="sec-desc">Nous vous accompagnons dans tous vos projets de rénovation et de décoration, en intérieur comme en extérieur.</p>
            <div class="container-card">
                <?php
                    $json = file_get_contents("./backend/data.json");
                    $data = json_decode($json, true);
                    foreach ($data["prestations"] as $service) {
                ?>
                    <div class="card">
                        <img src="<?= $service["image"] ?>" alt="<?= $service["name"] ?>">
                        <div class="infos">
                            <h3><?= $service["name"] ?></h3>
                            <p><?= $service["desc"] ?></p>
                            <a class="<?=$service["class"] ?>" href="#devis"><?= $service["lien"] ?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <section id="apropos-atelier">
            <div class="container-sec">
                <div class="sec-left">
                    <div class="title">Pourquoi choisir Glkolors ?</div>
                    <div class="desc">Forts de plus de 5 ans d'expérience, nous mettons un point d'honneur à réaliser des finitions impeccables tout en respectant vos lieux de vie.</div>
                    <div class="infos">
                        <div class="info">
                            <div class="logo r">
                                <i class="fa-solid fa-broom"></i>
                            </div>
                            <div>
                                <div class="title">Protection & Nettoyage</div>
                                <p class="desc">Vos meubles sont protégés et le chantier est nettoyé chaque soir.</p>
                            </div>
        
                        </div>
                        <div class="info">
                            <div class="logo g">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <div class="title">Respect des délais</div>
                                <p class="desc">Nous nous engageons sur une date de fin de chantier stricte.</p>
                            </div>
                            
                        </div>
                        <div class="info">
                            <div class="logo b">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <div>
                                <div class="title">Peintures Ecologiques</div>
                                <p class="desc">Utilisation de peintures sans solvants nocifs pour un air intérieur sain.</p>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="sec-right">
                    <div class="img-wraper">
                        <img src="./backend/images/apropos-atelier.webp" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="realisations">
            <h2>Dernières Réalisations</h2>
            <div>
                <div class="sec-desc">Découvrez la qualité de nos finitions à travers nos récents chantiers.</div>
            </div>
            <div class="container-slider">
                <div class="sliders">
                    <?php 
                        foreach($data["realisations"] as $rea){
                    ?>
                        <div class="slider">
                            <img src="<?=$rea["image"] ?>" alt="Image travaux réalisé">
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
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p class="sec-desc">Note moyenne de 4.9/5 sur plus de 120 avis clients</p>
            <div class="container-card-avis">
                <?php 
                    $avis = $data["avis"];
                    foreach($avis as $avi){?>
                        <div class="card-avis">
                            <div class="infos">
                                <div class="img-avis">
                                    <img src="<?= $avi["image"] ?>" alt="Photo personne déposant l'avis">
                                </div>
                                <div class="info">
                                    <div class="avis-person"><?= $avi["name"] ?></div>
                                    <div class="date-avis"><?= $avi["date"] ?></div>
                                </div>
                            </div>
                            <p><?= $avi["message"] ?></p>
                        </div>
                    <?php } ?>
            </div>
        </section>
        <section id="devis">
            <div class="container-form">
                <div class="form-left">
                    <h2>Parlez-nous de votre projet</h2>
                    <p class="sec-desc">Remplissez ce formulaire pour obtenir un devis gratuit. Notre équipe vous recontactera sous 48h avec une proposition adaptée.</p>
                    <div class="infos">
                        <div class="info">
                            <div class="logo x">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="details">
                                <div>Appelez-nous</div>
                                <p>06 02 66 15 68</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="logo y">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="details">
                                <div>Ecrivez-nous</div>
                                <p>Glkolors.artisan@gmail.com</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="logo z">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="details">
                                <div>Notre Atelier</div>
                                <p>47 chemins des fonts saladas, 87100 Limoges</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-right">
                    <h3>Demande de Devis Gratuit</h3>
                    <form action="" method="post">
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
                                <option value="">Intérieur</option>
                                <option value="">Extérieur</option>
                                <option value="">Décoration</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="msg">Détails du projet</label>
                            <textarea name="msg" id="msg" placeholder="Décrivez brièvement les pièces à peindre, la surface approximative, l'état des murs..."></textarea>
                        </div>
                        <button type="submit">Envoyer ma demande</button>
                        <p>Vos données sont protégées et ne seront utilisées que pour répondre à votre demande.</p>
                    </form>
                </div>
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
                    <li>06 02 66 15 68</li>
                    <li><a href="mailto:Glkolors.artisan@gmail.com">Glkolors.artisan@gmail.com</a></li>
                    <li>47 chemin des fonts saladas</li>
                </ul>
            </div>
        </div>
        </div>
        <div class="footer-bottom">
            © 2026 Glkolors. Tous droits réservés.
        </div>
    </footer>
    <script src="./script/main.js"></script>
    <script src="./script/carrousel.js"></script>
</body>
</html>