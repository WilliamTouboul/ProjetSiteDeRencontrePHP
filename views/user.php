<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="/assets/style/style.css" rel="stylesheet">
    <title>Inscription</title>
</head>

<body>
    <?php include('../controllers/user_controller.php'); ?>

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




    <?php include("footer.php"); ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>