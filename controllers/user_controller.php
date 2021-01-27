<?php
if (isset($_COOKIE['userLastname']) && isset($_COOKIE['userFirstname']) && isset($_COOKIE['userAge']) && isset($_COOKIE['userGender']) && isset($_COOKIE['userZipcode']) && isset($_COOKIE['userMail']) && isset($_COOKIE['userSearching']) && isset($_COOKIE['userDescription'])) {
    $userLastname = $_COOKIE['userLastname'];
    $userFirstname = $_COOKIE['userFirstname'];
    $userAge = $_COOKIE['userAge'];
    $userGender = $_COOKIE['userGender'];
    $userMail = $_COOKIE['userMail'];
    $userZipcode = $_COOKIE['userZipcode'];
    $userSearching = $_COOKIE['userSearching'];
    $userDescription = $_COOKIE['userDescription'];
} else {
    header('Location: ../index');

}


if (isset($_POST['destroyButton'])) {
    setcookie('userLastname', '', time() - 3600, '/');
    setcookie('userFirstname', '', time() - 3600, '/');
    setcookie('userAge', '', time() - 3600, '/');
    setcookie('userMail', '', time() - 3600, '/');
    setcookie('userGender', '', time() - 3600, '/');
    setcookie('userZipcode', '', time() - 3600, '/');
    setcookie('userSearching', '', time() - 3600, '/');
    setcookie('userDescription', '', time() - 3600, '/');
    header('Location: ../index');

}