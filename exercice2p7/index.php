<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 2 Partie 7 php</title>
    </head>
    <body>
        <!-- Créer un formulaire demandant le nom et le prénom.
              Ce formulaire doit rediriger vers la page user.php avec la méthode POST. -->

        <!-- Ici même consigne que pour l'exercice 1, mais nous utilisons la méthode POST -->
        <form action="user.php" method="POST">
            <label for="firstname">Nom :</label>
            <input type="text" name="firstname" value="" id="firstname" placeholder="Jean" required />
            <label for="lastname">Prénom :</label>
            <input type="text" name="lastname" value="" id="lastname" placeholder="Dupon" required />
            <input type="submit" name="validate" value="Valider" />
        </form>
    </body>
</html>