<?php
           // Regex qui s'écurise les noms dans les inputs.
        $paternName = '/^[A-Z][a-zÀ-ÖØ-öø-ÿ]+([ \-][A-Z][a-zÀ-ÖØ-öø-ÿ]+)*$/';
        $genderList =  ['1' => 'Mr', '2' => 'Mme'];
        if (isset($_GET['submit'])){
        if(!empty($_GET['lastname'])){
            if(preg_match($paternName, $_GET['lastname'])){
                $lastname = htmlspecialchars($_GET['lastname']);
            }else{
                $lastnameError = 'Veuillez entrer un nom de famille commençant par une majuscule.';
            }
        }else{
             $lastnameError = 'Veuillez entrer votre nom de famille.';
        }
         if(!empty($_GET['firstname'])){
            if(preg_match($paternName, $_GET['firstname'])){
                $firstname = htmlspecialchars($_GET['firstname']);
            }else{
                $firstnameError = 'Veuillez entrer un prénom commençant par une majuscule.';
            }
        }else{
             $firstnameError = 'Veuillez entrer votre prénom.';
        }
        }
  ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 5 Partie 7 php</title>
    </head>
    <body>
        <!-- Créer un formulaire sur la page index.php avec :
            Une liste déroulante pour la civilité (Mr ou Mme)
            Un champ texte pour le nom
            Un champ texte pour le prénom
            Ce formulaire doit rediriger vers la page index.php.
            Vous avez le choix de la méthode. -->

            <!-- Ici notre formulaire sera affiché sur la même page index.php, et les données saisies s'afficheront en dessous du formulaire.
            J'utiliserais la méthode GET-->
        <form action="index.php" method="GET">
            <label for="choice">Votre civilité :</label>
            <select name="choice">
                <!-- Ici je fais une boucle foreach pour gérer l'affichage de ma liste déroulante. Cela me permet de juste modifier le tableau genderList
                si je souhaite ajouter de nouveaux choix. -->
                <?php foreach ($genderList as $key => $gender) { ?>
                    <option value="<?= $key ?>"> <?= $gender ?></option>;
                <?php }
                ?>
            </select>
            <label for="firtsname">Prénom :</label>
            <input type="text" name="firstname" value="<?= isset($firstname) ? $firstname : '' ?>" />
            <p class="<?= isset($firstname) ? 'success' : 'error' ?>"><?= (empty($firstname) && isset($_GET['submit'])) ? $firstnameError : '' ?></p>
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" value="<?= isset($lastname) ? $lastname : '' ?>" />
            <p class="<?= isset($lastname) ? 'success' : 'error' ?>"><?= (empty($lastname) && isset($_GET['submit'])) ? $lastnameError : '' ?></p>
            <input type="submit" name="submit" value="Valider" />
        </form>
        <a href="index.php">Retour</a>
        <p><?= (isset($firstname) && isset($_GET['submit'])) ? $firstname : '' ?></p> 
        <p><?= (isset($lastname) && isset($_GET['submit'])) ? $lastname : '' ?></p>
    </body>
</html>

