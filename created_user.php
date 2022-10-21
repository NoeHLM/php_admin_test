<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<div class = "Formulaire">
        <form method="post" action="fctregister.php">

        <div class="pseudo">
            <label for="pseudo"></label>
            <input type="text" maxlength="30" size="43" placeholder="Pseudo" 
            name="pseudo" id="pseudo" required>
        </div>

        <div class="mdp">
            <label for="mdp"></label>
            <input type="text" maxlength="30" size="43" placeholder="Mot de passe..." 
            name="mdp" id="mdp" required>
        </div>

        <div class="valider">
            <input type="submit" name="submit" value="Valider" />
        </div>
</form>
</div>
</body>
</html>