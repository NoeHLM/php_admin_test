<?php
$dbh = new PDO ('mysql:host=localhost;dbname=finale', 'root', ''); //On vient creer un objet qui vient recuperer les informarions de la base de donnees



if(isset($_POST['submit'])){

    
    $mail = ($_POST['mail']);
    $nvmail = ($_POST['nvmail']);

    $stmt = $dbh->prepare("SELECT * FROM users WHERE username=?");
            $stmt->execute([$mail]); 
            $user = $stmt->fetch();
            if ($user) {
                $sql = "UPDATE users SET username =  ?  WHERE username= ? ";   
                $modifUser = $dbh->prepare($sql); 
                $modifUser->execute(array($nvmail,$mail)); 
                echo "le pseudo a été changé avec succès";
                // le nom d'utilisateur existe déjà
                } else {
                    echo"le pseudo : ".$mail." n'existe pas";

                }

            }
            ?>