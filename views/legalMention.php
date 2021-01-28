<!DOCTYPE html>
<html lang="fr  ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Me Halfway - Mentions Legales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" <link href="" rel="stylesheet">

    <link href="../assets/style/style.css" rel="stylesheet">

</head>

<body>
    <nav id="idnav" class="navbar  navbar-expand-lg d-flex justify-content-end sticky-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="../index.php"><span class="red">M</span>eet <br><span class="red">M</span>e
                <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(163, 31, 31)" width="30" height="30" viewBox="0 0 24 24">
                    <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                </svg>
                <br> <span class="red">H</span>alfway</a>
            </a>
            <p id="infolover"> Hello ! </p>
            <ul id="nav2" class="navbar-nav ms-auto mb-2 mb-lg-0  ">
                <li> <button id="btnmessage" type="button" class="btn btn-danger position-relative">
                        Message(s)<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+13 <span class="visually-hidden">unread messages</span></span>
                    </button></li>
                <li><a href="\views\user.php">
                        <button id="btnprofile" type="button" class="btn btn-danger">Votre profil</button>
                    </a> </li>
                <?php if (
                    isset($_COOKIE['userLastname']) && isset($_COOKIE['userFirstname'])
                    && isset($_COOKIE['userAge']) && isset($_COOKIE['userGender']) && isset($_COOKIE['userZipcode'])
                    && isset($_COOKIE['userMail']) && isset($_COOKIE['userSearching']) && isset($_COOKIE['userDescription'])
                ) { ?>
                    <li>
                        <form method="POST">
                            <button type="submit" id="btndeconex" name="btndeconex" class="btn btn-danger">Déconnexion</button>
                        </form>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <div class="legalMentionColumn">
        <p>
            <br>
            <br><br>
            <br>
            Mentions Légales
            <br>
            <br>
            Ce site est édité par la société <span class="wtLegalMentionsPropName">Meet Me Halfway</span>.
            <br>
            Siège social : <span class="wtLegalMentionsPropName">Meet Me Halfway</span>, 10 Place Léon Meyer, 76600 Le Havre
            Le Havre, France.<br>
            Capital social : 125.550 euros<br>
            Téléphone : +33 (0)6 59 40 65 61<br>
            <br>
            Responsable de la rédaction : TOUBOUL William<br>
            <br>
            Développement, hébergement : Localhost? <br><br>
        </p>
        <div class="text-center">
            <p class="text-decoration-underline ">Informatique et liberté</p>
            <br>
            Aucune information personnelle n'est collectée à votre insu. Les informations que vous nous communiquez lors
            d’une
            demande de devis, de renseignements ou d’inscription à la newsletter par courrier, par téléphone, par e-mail
            ou
            par
            formulaire sont uniquement destinées au traitement administratif et commercial de votre demande par la
            société
            <span class="wtLegalMentionsPropName">Meet Me Halfway</span>.<br>
            <br>
            Elles ne font l'objet d'aucune cession à des tiers. <span class="wtLegalMentionsPropName">All In
                Bagels</span> traite les informations qui vous
            concernent
            avec
            la plus grande confidentialité.<br>
            <br>
            Conformément à la loi « Informatique et Libertés » n°78-17 du 6 janvier 1978, vous disposez d'un droit
            d'accès,
            de
            rectification et d'opposition aux données personnelles vous concernant. Pour l'exercer, il suffit de nous en
            faire
            la demande par écrit aux coordonnées suivantes : 10 Place Léon Meyer, 76600 Le Havre
            Le Havre, France.
            Droit d'auteur / copyright<br>
            <br>
            L'ensemble du contenu du présent site Internet, y compris nom de domaine, marques, logo, texte… est la
            propriété
            de
            la société Meet Me Halfway, il est protégé par les lois en vigueur de la législation française sur la propriété
            intellectuelle.<br>
            <br>
            Aucun élément de ce site ne peut être copié, reproduit, détourné ou dénaturé, et ce, sur quelque support que
            ce
            soit, sans constituer un acte de contrefaçon au sens des articles L 335-2 et suivants du code de la
            propriété
            intellectuelle.<br>
            Accès au site<br>
            <br>
            L'utilisateur de ce site reconnaît disposer de la compétence et des moyens nécessaires pour accéder et
            utiliser
            ce
            site. Meet Me Halfway ne saurait être tenu responsable des éléments en dehors de son contrôle et des dommages
            qui
            pourraient éventuellement être subis par l'environnement technique de l'utilisateur et notamment, ses
            ordinateurs,
            logiciels, équipements réseaux et tout autre matériel utilisé pour accéder ou utiliser le service et/ou les
            informations.<br>
            <br>
            Il est rappelé que le fait d'accéder ou de se maintenir frauduleusement dans un système informatique,
            d'entraver
            ou
            de fausser le fonctionnement d'un tel système, d'introduire ou de modifier frauduleusement des données dans
            un
            système informatique constitue des délits passibles de sanctions pénales.
            Limitation de responsabilité<br>
            <br>
            <span class="wtLegalMentionsPropName">Meet Me Halfway</span> s'attache à transmettre des informations
            régulièrement mises à jour, notamment sur les
            actualités
            ainsi que sur le contenu des articles. Toutefois des informations erronées ou des omissions peuvent être
            constatées,
            suite notamment à des erreurs de saisie ou de mise en page. Si vous en faisiez le constat nous vous invitons
            à
            nous
            le signaler pour que nous puissions procéder à leur rectification.<br>
            <br>
            Nous nous réservons par ailleurs le droit de modifier les informations ou les éventuelles offres
            commerciales
            fournies par le présent site, dans le cadre de nos opérations d'actualisation et de mise à jour des données,
            et
            ce
            sans préavis.<br>
            <br>
            Les liens hypertextes mis en oeuvre au sein du présent site Internet, en direction d'autres sites et/ou de
            pages
            personnelles et d'une manière générale vers toutes ressources existantes sur Internet, ne sauraient engager
            la
            responsabilité de Meet Me Halfway.<br>
            De même que la société <span class="wtLegalMentionsPropName">Meet Me Halfway</span> ne pourra en aucune façon
            être tenue pour responsable des sites ayant
            un
            lien
            hypertexte avec le présent site et décline toute responsabilité quant à leur contenu et à leur
            utilisation.<br>
            <br>
        </div>
    </div>

    </body>
<script src="../assets/js/script.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


    <?php include("footer.php"); ?>
</body>

</html>