<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 1 Partie 7 php</title>
    </head>
    <body>
        <!-- Créer un formulaire demandant le nom et le prénom.
              Ce formulaire doit rediriger vers la page user.php avec la méthode GET. -->
        <!-- Ici la validation de mon formulaire renvoit les données saisies vers la page user.php, et j'utilise la méthode GET. 
        action et method sont des attributs -->
        <form name="nameForm" action="user.php" method="GET">
            <label for="firstname">Nom :</label>
            <input type="text" name="firstname" value=""  />
            <label for="lastname">Prénom :</label>
            <input type="text" name="lastname" value=""  />
            <input type="submit" name="validate" value="Valider" />  <!-- Trés important : le bouton submit doit être dans le formulaire -->
        </form>
    </body>
</html>
