<?php $genderList = array(1 => 'Mr', 2 => 'Mme'); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Exercice 7 Partie 7 php</title>
    </head>
    <body>
        <!-- Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. 
        Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier. -->
        <?php if (empty($_POST['submit'])) { ?>
            <div class="form">
                <form action="index.php" method="POST" name="form" enctype="multipart/form-data">
                    <label for="choise">Votre civilité :</label>
                    <select name="choise">
                        <?php foreach ($genderList as $key => $gender) { ?>
                            <option value="<?= $key ?>"> <?= $gender ?></option>;
                        <?php }
                        ?>
                    </select>
                    <label for="firtsname">Nom :</label>
                    <input type="text" name="firstname" />
                    <label for="lastname">Prénom :</label>
                    <input type="text" name="lastname" /><br />
                    <label for="file">Fichier à téléchager:</label>
                    <input type="file" name="download" />
                    <input type="submit" name="submit" value="Valider" />
                </form>
            </div>
            <?php
        } else {

            $choise = htmlspecialchars($_POST['choise']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $patern = '/^[A-Z][a-zÀ-ÖØ-öø-ÿ]+([ \-][A-Z][a-zÀ-ÖØ-öø-ÿ]+)*$/';
            $download = $_FILES['download'];

            if (isset($choise) && isset($firstname) && isset($lastname)) {
                ?>
                <p><?= $genderList[$choise]; ?></p>
                <?php
                if (preg_match($patern, $firstname)) {
                    ?>
                    <p><?= $firstname; ?></p>
                <?php } else {
                    ?>
                    <p><?= $firstname; ?></p>
                    <p class="regex">Merci d'entrer un nom valide</p>
                    <?php
                }
                if (preg_match($patern, $lastname)) {
                    ?>
                    <p><?= $lastname; ?></p>
                <?php } else {
                    ?>
                    <p><?= $lastname; ?></p>
                    <p class="regex">Merci d'entrer un prénom valide</p>
                    <?php
                }
                if (empty($choise) && empty($firstname) && empty($lastname)) {
                    ?>
                    <p class="regex">Merci de remplir le formulaire</p>
                    <?php
                }
            }
            if (empty($download['name'])) {
                ?>
                <p class="regex">Merci de selctionner un fichier.</p>
            <?php } else { ?>
                <p><?= $download['name']; ?></p>
                <?php
            }
            ?>
            <a href="index.php">Retour</a>
<?php } ?>




    </body>
</html>

