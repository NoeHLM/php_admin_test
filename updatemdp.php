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
        <form method="post" action="verifmdp.php">

        <div class="mail">
            <label for="mail"></label>
            <input type="text" maxlength="30" size="43" placeholder="Pseudo" 
            name="mail" id="mail" required>
        </div>
        </form>
        


        <div class="nvmail">
            <label for="nvmail"></label>
            <input type="text" maxlength="30" size="43" placeholder="Nouveau mdp" 
            name="nvmail" id="nvmail" required>
        </div>

        <div class="valider">
            <input type="submit" name="submit" value="Valider"  />


</form>
</div>