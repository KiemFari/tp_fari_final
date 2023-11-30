<?php 
session_start();
try{
    $bdd= new PDO('mysql:host=localhost;dbname=commerce;','root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e){
    die("Error " . $e->getMessage());
} 



if (isset($_GET['id'])) {
    $id_champ = $_GET['id'];
    
    $sel = $bdd->prepare("SELECT *  FROM connecte WHERE id= :id");
    $sel->execute([
        ':id' => $id_champ,
    ]);
    // delete site
    
    $d=$sel->fetch();
    $supr = $bdd->prepare("DELETE  FROM connecte WHERE id= :id");
    $supr->execute([
        ':id' => $id_champ,
    ]);
    $_SESSION['supr']=' supprimer avec Success';

    // echo $d['id'];
    header('Location:index.php?id='.$d['id']);

}



?>
