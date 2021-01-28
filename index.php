<?php include('controllers/index_controller.php'); ?>
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

    <nav id="idnav" class="navbar  navbar-expand-lg d-flex justify-content-end sticky-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="index.php"><span class="red">M</span>eet <br><span class="red">M</span>e
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


    <section id="headerHome">
        <div>
            <a href="#indexTitle" id="bigTitle"><span class="red">M</span>eet <br><span class="red">M</span>e
                <svg xmlns="http://www.w3.org/2000/svg" fill="red" width="62" height="62" viewBox="0 0 24 24">
                    <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                </svg>
                <br> <span class="red">H</span>alfway</a>
        </div>
    </section>


    <div class="100vh" id="header">

    </div>

    <div class="container" data-aos="fade-left">
        <div class="row">
            <div class="col-md-12 inscriptionColumn">
                <h1 class="text-center" id="indexTitle"> <svg xmlns="http://www.w3.org/2000/svg" fill="red" width="36" height="36" viewBox="0 0 24 24">
                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                    </svg>
                    BIENVENUE JEUNE LOVER
                    <svg xmlns="http://www.w3.org/2000/svg" fill="red" width="36" height="36" viewBox="0 0 24 24">
                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                    </svg>
                </h1>
                <!-- FORM -->
                <form method="POST" enctype="multipart/form-data" id="form">
                    <!-- Nom -->
                    <label for="lastname">Nom :</label>
                    <input class="rounded inputText" type="text" name="lastname" id="lastname" placeholder="Doe" value="<?php if (isset($_POST['lastname'])) {
                                                                                                                            echo $_POST['lastname'];
                                                                                                                        }  ?>">
                    <span class="error"> <?= $lastnameError; ?> </span>

                    <!-- Prénom -->
                    <div class="inputDiv">
                        <label for="firstname">Prénom : </label>
                        <input class="rounded inputText" type="text" name="firstname" id="firstname" placeholder="John" value="<?php if (isset($_POST['firstname'])) {
                                                                                                                                    echo $_POST['firstname'];
                                                                                                                                }  ?>">
                        <span class="error"> <?= $firstnameError; ?> </span>
                    </div>
                    <!-- Age -->
                    <div class="inputDiv">
                        <label for="age">Age :</label>
                        <input class="rounded inputText" type="text" name="age" id="age" placeholder="25" value="<?php if (isset($_POST['age'])) {
                                                                                                                        echo $_POST['age'];
                                                                                                                    }  ?>">
                        <span class="error"> <?= $ageError; ?> </span>
                    </div>
                    <!-- Genre -->
                    <div class="inputDiv">
                        <label for="gender">Genre :</label>
                        <select class="rounded inputText" name="gender" id="gender">
                            <option value="">-- Choisissez --</option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                            <option value="Autre">Autres</option>
                        </select>
                        <span class="error"> <?= $genderError; ?> </span>
                    </div>

                    <!-- Code Postal -->
                    <div class="inputDiv">
                        <label for="zipcode">Code Postal : </label>
                        <input class="rounded inputText" type="text" name="zipcode" id="zipcode" placeholder="75000" value="<?php if (isset($_POST['zipcode'])) {
                                                                                                                                echo $_POST['zipcode'];
                                                                                                                            }  ?>">
                        <span class="error"> <?= $zipcodeError; ?> </span>
                    </div>

                    <!-- Adresse Mail -->
                    <div class="inputDiv">
                        <label for="mail">Adresse Mail :</label>
                        <input class="rounded inputText" type="email" name="mail" id="mail" placeholder="a...@b....com" value="<?php if (isset($_POST['mail'])) {
                                                                                                                                    echo $_POST['mail'];
                                                                                                                                }  ?>">
                        <span class="error"> <?= $mailError; ?> </span>
                    </div>

                    <!-- Recherche -->
                    <div class="inputDiv">
                        <label for="searching">Vous recherchez : </label>
                        <div>
                            <div>
                                <input type="radio" id="searching" name="searching" value="homme" checked>
                                <label for="homme">Homme</label>
                            </div>
                            <div>
                                <input type="radio" id="searching" name="searching" value="femme" checked>
                                <label for="femme">Femme</label>
                            </div>
                        </div>
                        <span class="error"> <?= $searchingError; ?> </span>
                    </div>
                    <!-- Description -->
                    <div class="inputDiv">
                        <label for="description">Description : </label>
                        <input type="text" class="rounded inputText" name="description" id="description" value="<?php if (isset($_POST['description'])) {
                                                                                                                    echo $_POST['description'];
                                                                                                                }  ?>">
                        </input>
                        <span class="error"> <?= $descriptionError; ?> </span>
                    </div>

                    <!-- Images -->
                    <div class="inputDiv">
                        <label for="picture">Image de profil : </label>
                        <input class="rounded inputText" type="file" id="picture" name="picture" accept="image/png, image/jpeg">
                        <span class="error"> <?= $pictureError; ?> </span>
                    </div>
                    <div class="justify-content-center">
                        <!-- Bouton -->
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <button id="btnSubmit" type="submit" class="rounded btn" name="submitButton" id="submitButton" Value="">Rencontrer nos célibataires</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include("views/footer.php"); ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
<script src="assets/js/script.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


</html>