<?php
include("controllers\lovers_controller.php");
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" <link href="" rel="stylesheet">
    <link href="\assets\style\style.css" rel="stylesheet">
    <title>lover</title>
</head>

<body>
    <section>
        <nav class="navbar  navbar-expand-lg navbar-dark bg-dark  ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Hello <strong>Lover !</strong>
                    <br>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  id=" navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li> <button type="button" class="btn btn-primary position-relative">
                                MESSAGES ! <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99 <span class="visually-hidden">unread messages</span></span>
                            </button></li>

                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>Mon profile</a>
                        </li>

                        <li class="nav-item bd-highlight">
                            <a class="nav-link" href="#">deconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>


    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            // le person c'est le compteur et infos c'est la ligne avec la liste des informations
            foreach ($TabLovers as $person => $information) {
            ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $information['picture']; ?> class="card-img-top" alt=<?= $information['firstname'] . $information['lastname']; ?>>
                        <div class="card-body">
                            <h5 class="card-title"> <?= $information['firstname'] . $information['lastname']; ?> </h5>
                            <p class="card-text"><?= $information['description'] ?> </p>
                            <a href="#" class="btn btn-primary">Discuter</a>
                            <a id="btnlike" class="btn btn-primary">Like </a>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>
    </div>

</body>
<script src="assets/js/script.js"> </script>

</html>