<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["username"]) and !empty($_POST["username"])){
        if (filter_var($POST["username"], FILTER_VALIDATE_EMAIL)) {

            $getdata = $pdo->prepare("SELECT  email FROM admin WHERE email=? and password=?");
            $getdata->execute (array($_POST["username"], $_POST["password"]));
            $rows =$getdata->rowCount();
            if($rows==true){
                $SESSION["admin"]=$_POST["username"];
                header("Location:admin.php");
            }else{
                $erreur= "username ou mot de passe inconnue";
            }
            
        }else{
            $erreur= "veuillez saisir un email valide !";
        }
    }else{
        $erreur = "veuillez saisir un username";
    }
}else{
    $erreur = "veuillez saisir un username";
}