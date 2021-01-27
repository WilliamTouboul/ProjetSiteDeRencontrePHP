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
        <nav class="navbar" class="navbar  navbar-expand-lg  ">
            <a class="navbar-brand" href="#"><span class="red">M</span>eet <br><span class="red">M</span>e
                <svg xmlns="http://www.w3.org/2000/svg" fill="red" width="62" height="62" viewBox="0 0 24 24">
                    <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                </svg>
                <br> <span class="red">H</span>alfway</a>
            </a>

            <ul id="nav2" class="navbar-nav me-auto mb-2 mb-lg-0  ">
                <li> <button id="btnmessage" type="button" class="btn btn-danger position-relative">
                        MESSAGES ! <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+13 <span class="visually-hidden">unread messages</span></span>
                    </button></li>
                <li>
                    <button id="btnprofile" type="button" class="btn btn-danger">Profile</button>
                </li>
                <li><button id="btndeconex" type="button" class="btn btn-danger">Deconnection</button>
                </li>
            </ul>

            </div>
        </nav>
    </section>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            // le person c'est le compteur et infos c'est la ligne avec la liste des informations
            foreach ($TabLovers as $person => $information) {
                $fsname = $information['firstname'];
                $lstname = $information['lastname'];
                $desc = $information['description'];
                $idmodal = "modal$person";
            ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $information['picture'];  ?> height="300" class="card-img-top" alt=<?= "$fsname   $lstname;" ?>>
                        <div class="card-body">
                            <h5 class="card-title"> <?= $lstname . " " . $fsname; ?> </h5>
                            <p class="card-text"><?= $desc ?> </p>
                            <a>
                                <!-- Button trigger modal -->
                                <button type="button" id="btndiscut" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?= $idmodal; ?>">
                                    Discuter
                                </button>
                            </a>
                            <a id="btnlike" class="btn btn-danger">Like </a>
                        </div>
                    </div>
                </div>
                <!-- Modal  discussion-->
                <div class="modal fade" id="<?= $idmodal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title w-100 text-center" id="exampleModalLabel "><?= $lstname . " " . $fsname; ?> </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <label for="message" id="labelmessage"><strong>Dis lui tout :</strong> </label>
                            <div class="modal-body">

                                <textarea id="message" name="story" rows="5" cols="63">
                                </textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Envoyer</button>
                            </div>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</html>