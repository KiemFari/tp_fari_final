<?php
session_start();

try{
    $pdo = new PDO("mysql:host=localhost;dbname=commerce", "root", "");

}catch(PDOException  $e){
    die("erreur :" . $e->getMessage());
}

$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$code =htmlspecialchars($_POST ["code"],ENT_QUOTES);

$requete = $pdo->prepare("SELECT * FROM formulaire WHERE email=?");
$requete->execute([$email]);


if($requete->rowCount() == 1) {

    $form=$requete->fetch(PDO::FETCH_ASSOC);
    $_SESSION=$_form["email"];

        if ($form["code"]==$code) {
            if ($form["role"] == "administrateur") {
                $_SESSION["id_users"] =$form["id_user"];
                $_SESSION["nom"] =$form["nom"];
                $_SESSION["prenom"] =$form["prenom"];
                $_SESSION["email"] =$form["email"];
                $_SESSION["code"] =$form["code"];
                header("Location:index.php");
            }
            else{
                header("Location:admin.php");
                exit();
            }
        }
    
        else {
            echo " mot de passe incorrect";
        }

}
else {
    echo "vous n'avez pas de compte";
}

?>
