<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mentions légales - GLKolors, artisan peintre à Limoges.">
    <title>Mentions Légales - GLKolors</title>
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <style>
        .mentions-hero {
            background-color: #0f172a;
            padding: 80px 48px;
            text-align: center;
        }

        .mentions-hero h1 {
            font-size: 48px;
            color: #fff;
            max-width: 100%;
        }

        .mentions-hero p {
            color: #ffffff88;
            margin-top: 16px;
            font-size: 16px;
        }

        .mentions-container {
            max-width: 860px;
            margin: 0 auto;
            padding: 80px 24px;
            display: flex;
            flex-direction: column;
            gap: 48px;
        }

        .mentions-block {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .mentions-block h2 {
            font-size: 22px;
            font-weight: bold;
            text-align: left;
            margin-bottom: 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .mentions-block h2 .icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            flex-shrink: 0;
        }

        .icon.purple { background-color: #8a5cf622; color: #8b5cf6; }
        .icon.amber  { background-color: #f59f0b2f; color: #f59e0b; }
        .icon.green  { background-color: #10b9812f; color: #10b981; }
        .icon.blue   { background-color: #0070ba22; color: #0070ba; }
        .icon.pink   { background-color: #a2006c22; color: #a2006c; }
        .icon.slate  { background-color: #64748b22; color: #64748b; }

        .mentions-block p,
        .mentions-block li {
            font-size: 15px;
            color: #64748b;
            line-height: 28px;
        }

        .mentions-block ul {
            padding-left: 20px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .mentions-block a {
            color: #0070ba;
            text-decoration: none;
            font-weight: 500;
        }

        .mentions-block a:hover {
            text-decoration: underline;
        }

        .mentions-divider {
            height: 1px;
            background-color: #e2e8f0;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            background-color: #0f172a;
            padding: 12px 24px;
            border-radius: 20px;
            margin-top: 8px;
            width: fit-content;
            transition: all 0.2s ease;
        }

        .back-link:hover {
            transform: scale(1.05);
            background-color: #17274d;
        }

        @media (max-width: 768px) {
            .mentions-hero {
                padding: 60px 24px;
            }

            .mentions-hero h1 {
                font-size: 32px;
            }

            .mentions-container {
                padding: 48px 24px;
                gap: 36px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="main-logo">
            <img src="./backend/images/logo-rec.webp" alt="logo entreprise">
        </div>
        <nav>
            <a href="index.php#accueil">Accueil</a>
            <a href="index.php#apropos">A propos</a>
            <a href="index.php#prestations">Prestations</a>
            <a href="index.php#realisations">Réalisations</a>
            <a href="index.php#avis">Avis</a>
        </nav>
        <div class="tel-devis">
            <span class="tel"><i class="fa-solid fa-phone"></i>06 02 66 15 68</span>
            <a class="btn-devis" href="index.php#devis">Demander un devis</a>
        </div>
        <button id="btn-menu"><i class="fa-solid fa-bars"></i></button>
    </header>
    <div class="nav-mobile">
        <a href="index.php#accueil">Accueil</a>
        <a href="index.php#apropos">A propos</a>
        <a href="index.php#prestations">Prestations</a>
        <a href="index.php#realisations">Réalisations</a>
        <a href="index.php#avis">Avis</a>
        <a class="btn-devis" href="index.php#devis">Demander un devis</a>
    </div>

    <main>
        <div class="mentions-hero">
            <h1>Mentions Légales</h1>
            <p>Dernière mise à jour : <?= date('d/m/Y') ?></p>
        </div>

        <div class="mentions-container">

            <div class="mentions-block">
                <h2>
                    <span class="icon purple"><i class="fa-solid fa-building"></i></span>
                    Éditeur du site
                </h2>
                <p>
                    Le présent site est édité par :<br><br>
                    <strong>GLKolors</strong><br>
                    Artisan peintre — Auto-entrepreneur<br>
                    47 chemin des fonts saladas, 87100 Limoges<br>
                    Téléphone : <a href="tel:0602661568">06 02 66 15 68</a><br>
                    Email : <a href="mailto:Glkolors.artisan@gmail.com">Glkolors.artisan@gmail.com</a><br>
                    SIRET : [Numéro SIRET]<br>
                    N° TVA intracommunautaire : [N° TVA si applicable]
                </p>
            </div>

            <div class="mentions-divider"></div>

            <div class="mentions-block">
                <h2>
                    <span class="icon amber"><i class="fa-solid fa-globe"></i></span>
                    Hébergement
                </h2>
                <p>
                    Ce site est hébergé par :<br><br>
                    <strong>[Nom de l'hébergeur]</strong><br>
                    [Adresse de l'hébergeur]<br>
                    [Site web de l'hébergeur]
                </p>
            </div>

            <div class="mentions-divider"></div>

            <div class="mentions-block">
                <h2>
                    <span class="icon green"><i class="fa-solid fa-shield-halved"></i></span>
                    Propriété intellectuelle
                </h2>
                <p>
                    L'ensemble des contenus présents sur ce site (textes, images, logos, graphismes) est la propriété exclusive de GLKolors ou de ses partenaires, et est protégé par les lois françaises et internationales relatives à la propriété intellectuelle.
                </p>
                <p>
                    Toute reproduction, représentation, modification ou exploitation, totale ou partielle, de ces contenus est interdite sans autorisation préalable écrite de GLKolors.
                </p>
            </div>

            <div class="mentions-divider"></div>

            <div class="mentions-block">
                <h2>
                    <span class="icon blue"><i class="fa-solid fa-lock"></i></span>
                    Données personnelles (RGPD)
                </h2>
                <p>
                    Conformément au Règlement Général sur la Protection des Données (RGPD) et à la loi Informatique et Libertés, vous disposez des droits suivants concernant vos données personnelles :
                </p>
                <ul>
                    <li>Droit d'accès à vos données</li>
                    <li>Droit de rectification</li>
                    <li>Droit à l'effacement (droit à l'oubli)</li>
                    <li>Droit à la limitation du traitement</li>
                    <li>Droit d'opposition</li>
                </ul>
                <p>
                    Les données collectées via le formulaire de devis (nom, téléphone, email) sont utilisées uniquement pour répondre à votre demande et ne sont jamais transmises à des tiers.
                </p>
                <p>
                    Pour exercer vos droits, contactez-nous à : <a href="mailto:Glkolors.artisan@gmail.com">Glkolors.artisan@gmail.com</a>
                </p>
            </div>

            <div class="mentions-divider"></div>

            <div class="mentions-block">
                <h2>
                    <span class="icon pink"><i class="fa-solid fa-cookie-bite"></i></span>
                    Cookies
                </h2>
                <p>
                    Ce site n'utilise pas de cookies de traçage ou publicitaires. Des cookies techniques strictement nécessaires au bon fonctionnement du site peuvent être utilisés.
                </p>
                <p>
                    Vous pouvez à tout moment désactiver les cookies depuis les paramètres de votre navigateur.
                </p>
            </div>

            <div class="mentions-divider"></div>

            <div class="mentions-block">
                <h2>
                    <span class="icon slate"><i class="fa-solid fa-scale-balanced"></i></span>
                    Responsabilité
                </h2>
                <p>
                    GLKolors s'efforce de fournir des informations exactes et à jour sur ce site. Toutefois, nous ne pouvons garantir l'exactitude, la complétude ou l'actualité des informations diffusées.
                </p>
                <p>
                    GLKolors ne saurait être tenu responsable des dommages directs ou indirects résultant de l'utilisation de ce site ou de l'impossibilité d'y accéder.
                </p>
            </div>

            <div class="mentions-divider"></div>

            <div class="mentions-block">
                <h2>
                    <span class="icon purple"><i class="fa-solid fa-gavel"></i></span>
                    Droit applicable
                </h2>
                <p>
                    Les présentes mentions légales sont soumises au droit français. En cas de litige, les tribunaux français seront seuls compétents.
                </p>
                <a href="index.php" class="back-link">
                    <i class="fa-solid fa-angle-left"></i> Retour à l'accueil
                </a>
            </div>

        </div>
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
                        <li><a href="index.php#realisations">Nos réalisations</a></li>
                        <li><a href="index.php#avis">Avis clients</a></li>
                        <li><a href="index.php#devis">Demander un devis</a></li>
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
            © <?= date('Y') ?> Glkolors. Tous droits réservés.
        </div>
    </footer>

    <script src="./script/main.js"></script>
</body>

</html>
