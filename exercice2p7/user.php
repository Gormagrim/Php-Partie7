<?php
// Regex qui s'écurise les noms dans les inputs.
$paternName = '/^[A-Z][a-zÀ-ÖØ-öø-ÿ]+([ \-][A-Z][a-zÀ-ÖØ-öø-ÿ]+)*$/';
if (!empty($_POST['lastname'])) {
    if (preg_match($paternName, $_POST['lastname'])) {
        $lastname = htmlspecialchars($_POST['lastname']);
    } else {
        $lastnameError = 'Veuillez entrer un nom de famille commençant par une majuscule.';
    }
} else {
    $lastnameError = 'Veuillez entrer votre nom de famille.';
}

if (!empty($_POST['firstname'])) {
    if (preg_match($paternName, $_POST['firstname'])) {
        $firstname = htmlspecialchars($_POST['firstname']);
    } else {
        $firstnameError = 'Veuillez entrer un prénom commençant par une majuscule.';
    }
} else {
    $firstnameError = 'Veuillez entrer votre prénom.';
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1 partie 7 php user</title>
    </head>
    <body> 
        <p class="<?= isset($lastname) ? 'success' : 'error' ?>"><?= isset($lastname) ? $lastname : $lastnameError ?></p>
        <p class="<?= isset($firstname) ? 'success' : 'error' ?>"><?= isset($firstname) ? $firstname : $firstnameError ?></p> 
    </body>
</html>
