<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Dogan</title>
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="" alt="logo entreprise">
        </div>
        <nav>
            <a href="#accueil">Accueil</a>
            <a href="#realisations">Réalisations</a>
            <a href="#prestations">Prestations</a>
            <a href="#avis">Avis</a>
        </nav>
        <div class="tel-devis">
            <span class="tel"><i class="fa-solid fa-phone"></i>01 23 45 67 89</span>
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
                    <a href="#devis">Parler de mon projet</a>
                    <div class="services">
                        <div class="service">
                            <div class="logo house">
                                <i class="fa-regular fa-house"></i>
                            </div>
                            <div class="title">Intérieur</div>
                            <p class="desc">Murs, plafonds, boiseries.</p>
                        </div>
                        <div class="service">
                            <div class="logo sun">
                                <i class="fa-solid fa-sun"></i>
                            </div>
                            <div class="title">Extérieur</div>
                            <p class="desc">Façades, volets, portails.</p>
                        </div>
                        <div class="service">
                            <div class="logo roller">
                                <i class="fa-solid fa-paint-roller"></i>
                            </div>
                            <div class="title">Décoration</div>
                            <p class="desc">Papiers peints, effets.</p>
                        </div>
                    </div>
                </div>
                <div class="hero-right">
                    <div class="img-wraper">
                        <img src="./backend/images/hero-image.png" alt="image-hero">
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
        <section id="prestation">
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
        <section id="apropos">
            <div class="container-sec">
                <div class="sec-left">
                    <div class="title">Pourquoi choisir notre atelier ?</div>
                    <div class="desc">Forts de plus de 15 ans d'expérience, nous mettons un point d'honneur à réaliser des finitions impeccables tout en respectant vos lieux de vie.</div>
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
                        <img src="./backend/images/peinture.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="realisations">
            <h2>Dernières Réalisations</h2>
        </section>
    </main>
</body>
</html>