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

    <div class="container inscriptionColumn" id="userMainPage">
        <div class="row">
            <div class="col-md-12 text-justify justify-content-center">
                <h2>Vos données : </h2>
                <div id="userData">
                    <p>Nom : <?= $userLastname ?> </p>
                    <p>Prénom : <?= $userFirstname ?> </p>
                    <p>Age : <?= $userAge ?></p>
                    <p>Genre : <?= $userGender ?> </p>
                    <p>Adresse Mail : <?= $userMail ?></p>
                    <p>Code Postal : <?= $userZipcode ?> </p>
                    <p>Recherche : <?= $userSearching ?> </p>
                    <p>Description : <?= $userDescription ?> </p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 buttonContainer">
                <form method="POST">
                    <button type="submit" id="destroyButton" name="destroyButton" class="btn userBtn">Destroy</button>
                </form>
            </div>
            <div class="col-md-6 buttonContainer">
                <form action="https://www.meetic.fr/">
                    <button type="button" id="meeticButton" name="meeticButton" class="btn userBtn">Meetic</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>