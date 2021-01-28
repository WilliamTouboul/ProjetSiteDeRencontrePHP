<?php include('../controllers/user_controller.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="../assets/style/style.css" rel="stylesheet">
    <title>Vos données</title>
</head>

<body>
    <nav id="idnav" class="navbar  navbar-expand-lg d-flex justify-content-end sticky-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="../index.php"><span class="red">M</span>eet <span id="inlineMedia"> <br> </span><span class="red">M</span>e
                <span id="inlineMedia"><svg xmlns="http://www.w3.org/2000/svg" fill="rgb(163, 31, 31)" width="30" height="30" viewBox="0 0 24 24">
                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                    </svg></span>
                <span id="inlineMedia"> <br> </span> <span class="red">H</span>alfway</a>
            </a>

        </div>
    </nav>

    <div class="container profilColumn" id="userMainPage">
        <div class="row">
            <div class="col-md-12">
                <h2>Vos données : </h2>
                <div id="userData">
                    <p><span class="userLineTitle">Nom : </span><span class="userLineInfo"><?= $userLastname ?></span></p>
                    <p><span class="userLineTitle">Prénom : </span><span class="userLineInfo"><?= $userFirstname ?></span></p>
                    <p><span class="userLineTitle">Age : </span><span class="userLineInfo"><?= $userAge ?></span></p>
                    <p><span class="userLineTitle">Genre : </span><span class="userLineInfo"><?= $userGender ?></span></p>
                    <p><span class="userLineTitle">Adresse Mail : </span><span class="userLineInfo"><?= $userMail ?></span></p>
                    <p><span class="userLineTitle">Code Postal : </span><span class="userLineInfo"><?= $userZipcode ?></span></p>
                    <p><span class="userLineTitle">Recherche : </span><span class="userLineInfo"><?= $userSearching ?></span></p>
                    <p><span class="userLineTitle">Description : </span><span class="userLineInfo"><?= $userDescription ?></span></p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 buttonContainer">
                <form method="POST">
                    <button type="submit" id="destroyButton" name="destroyButton" class="btn userBtn">Déconnexion</button>
                </form>
            </div>
            <div class="col-md-6 buttonContainer">
                <form>
                    <button type="button" id="meeticButton" name="meeticButton" id="meeticButton" class="btn userBtn">
                        <a id="meeticLink" href="https://www.meetic.fr/" target="_blank">Meetic</a>
                    </button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
<script src="assets/js/script.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</html>