<?php
$regexName = '/^[a-zA-Zàâäéèêëïîôöùûü\'\-\s]+$/'; // Regex Nom, Lettre, Accent, Espace, tiret et apostrophe.
$regexStandard = '/^[a-zA-Z0-9àâäéèêëïîôöùûü\'\-\/\.\,\s]+$/'; // Regex Lettre, Accent, Espace, poncutation pour Textarea
$regexAge = '/^[0-9]{1,2}$/'; // Regex nombre 1 a 2 chiffres uniquement pour l'age
$regexTel = '/^[0-9]{10}$/'; // Chiffre, imperativement 10 pour Tel.
$regexZipCode = '/^[0-9]{5}/'; // Zipcode, Chiffre, impérativement 5.
$regexMail = '/^(\s*|[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})$/'; // Regex Mail. 

$errorMessage = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" viewBox="0 0 24 24"><path d="M16.971 0h-9.942l-7.029 7.029v9.941l7.029 7.03h9.941l7.03-7.029v-9.942l-7.029-7.029zm-4.971 19.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25zm.5-4.25h-1l-1-10h3l-1 10z"/></svg>   Erreur dans le champ.'; // Message d'erreur

$lastnameError = $firstnameError = $ageError = $genderError = $zipcodeError = $mailError = $searchingError = $descriptionError = $pictureError = ''; // SPan avec les message d'erreur

function CheckInput($regex, $posted) // Fonction pour verifier les champs
{
    if (!preg_match($regex, $posted) || empty($posted)) {
        return FALSE;
    } else {
        return TRUE;
    }
}

if (isset($_POST['submitButton'])) {
    // Verif Nom
    if (CheckInput($regexName, $_POST['lastname'])) {
        setcookie('userLastname', $_POST['lastname'], time() + 86400);
    } else {
        $lastnameError = $errorMessage;
    }

    // Verif prénom
    if (CheckInput($regexName, $_POST['firstname'])) {
        setcookie('userFirstname', $_POST['firstname'], time() + 86400);
    } else {
        $firstnameError = $errorMessage;
    }

    // Verif Age
    if (CheckInput($regexAge, $_POST['age'])) {
        if($_POST['age']>=18) {
            setcookie('userAge', $_POST['age'], time() + 86400);

        } else {
            $ageError = ' <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" viewBox="0 0 24 24"><path d="M16.971 0h-9.942l-7.029 7.029v9.941l7.029 7.03h9.941l7.03-7.029v-9.942l-7.029-7.029zm-4.971 19.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25zm.5-4.25h-1l-1-10h3l-1 10z"/></svg> Vous devez etre majeur.';
        }
    } else {
        $ageError = $errorMessage;
    }

    // Verif Gender
    if ($_POST['gender'] == '') {
        $genderError = $errorMessage;
    } else {
        setcookie('userGender', $_POST['gender'], time() + 86400);
    }

    //Verif ZIp
    if (CheckInput($regexZipCode, $_POST['zipcode'])) {
        setcookie('userZipcode', $_POST['zipcode'], time() + 86400);
    } else {
        $zipcodeError = $errorMessage;
    }

    //Verif Mail
    if (CheckInput($regexMail, $_POST['mail'])) {
        setcookie('userMail', $_POST['mail'], time() + 86400);
    } else {
        $mailError = $errorMessage;
    }

    //verif Searching
    if (empty($_POST['searching'])) {
        $searchingError = $errorMessage;
    } else {
        setcookie('userSearching', $_POST['searching'], time() + 86400);
    }

    // verif Description
    if (CheckInput($regexStandard, $_POST['description'])) {
        setcookie('userDescription', $_POST['description'], time() + 86400);
    } else {
        $descriptionError = $errorMessage;
    }

    if ($_FILES["picture"]["error"] != 0) {
        $pictureError = $errorMessage;
    } else {
        $uploaddir = 'assets/img/uploaded/';
        $uploadfile = $uploaddir . basename($_FILES['picture']['name']);
        $mimetype = mime_content_type($_FILES['picture']['tmp_name']);
        if (in_array($mimetype, array('image/jpeg', 'image/png'))) {
            move_uploaded_file($_FILES['picture']['tmp_name'], $uploaddir . $_FILES['picture']['name']);
        } else {
            $pictureError = $errorMessage;
        }
    }

    if(isset($_COOKIE['userLastname']) && isset($_COOKIE['userFirstname']) && isset($_COOKIE['userAge']) && isset($_COOKIE['userGender']) && isset($_COOKIE['userZipcode']) && isset($_COOKIE['userMail']) && isset($_COOKIE['userSearching']) && isset($_COOKIE['userDescription'])) {
        header('Location: http://projetphpsiterencontre/views/user');
        exit();
    } else {
        header('Location: http://projetphpsiterencontre/index#indexTitle');
    }
}
