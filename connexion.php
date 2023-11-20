<?php



 @$email=$_POST['email'];
 @$code=$_POST['code'];
 @$submit=$_POST['submit'];
 @$erreur="";
 @$err="";

 include('connexionBDD.php');

if (isset($submit)) {

    if (empty($email) || empty($code)) {

        $erreur="Veuillez remplire tout les champs svp!";
          
    }
    else{
        $info_users = $bdd->query("SELECT *FROM connect WHERE email='$email' ")->fetch();

        if($info_users !== false){

            if($info_users['code'] == $code AND $info_users['role'] == 'administrateur'){

                
                    header('location:admin.php');
                
                
            }
            elseif
                ($info_users['code'] == $code AND $info_users['role'] == 'utilisateur'){

                
                    header('location:index.php');
                
            }
             else{
                $err="Mot de passe incorrecte!";
            }
        }else{ 
            $err="Email ou mot de passe incorrecte!";
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">

    <title>Connexion</title>
</head>
<body>


    <div class="contenaire">
        <button class="but"><a href="inscription.php">S'inscrire</a></button>

        <h1>Connexion</h1>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Entrez votre Email">
            <input type="password" name="code" placeholder="Entrez votre mot de passe">
            <input type="submit" value="Se connecter" name="submit" class="submit">

            <div style="color: red; font-family:Arial, sans-serif;"><?php echo $err ?></div>
            <div style="color: red; font-family:Arial, sans-serif;"><?php echo $erreur ?></div>
        </form>
        <img src="image/2.jpg" alt="" width="200px" >
        
    </div>
</body>
</html>