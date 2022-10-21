<?php
$dbh = new PDO ('mysql:host=localhost;dbname=finale', 'root', ''); //On vient creer un objet qui vient recuperer les informarions de la base de donnees



if(isset($_POST['submit'])) 
{
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mdp = sha1($_POST['mdp']);

   $stmt = $dbh->prepare("SELECT * FROM users WHERE username=?"); //dans la variable stmt on prépare la selection de la ligne de la BDD dont le mail est dans la fonction execute
          $stmt->execute([$pseudo]); //lire commentaire d'avant
          $user = $stmt->fetch();

          if ($user) {  
            echo"Ce nom d'utilisateur existe déjà ";
            // le nom d'utilisateur existe déjà
            } else {
   $insertUser = $dbh->prepare('INSERT INTO users(id,username,passwords)VALUES(0,?,?)'); //on rentre dans la base de données (via l'objet) les informations du nouvel utilisateur
          $insertUser->execute(array($pseudo,$mdp));
}
}

?>