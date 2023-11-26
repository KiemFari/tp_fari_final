<?php
//inclure la page de connexion
include_once "con_dbb.php";
//verifier si une session existe
if(!isset($_SESSION)){
    //si non demarer la session
    session_start();
}
//creer a session 
if(!isset($_SESSION['commerce'])){
    //s'il n'exixte pas une session on creer une  et on mets un tableau à l'interieur
    $_SESSION['commerce'] = array();
}
//recuperation de l'id dans le lien
if(isset($_GET['id'])){
    //si un id à été envoyer alors:
    $id =  $_GET['id'];
    //verifier grace a l'id si le produit existe dans la base de données
    $produit = mysqli_query($con , "SELECT * FROM panier WHERE id = $id");
    if(empty(mysqli_fetch_assoc($produit))){
        //si le produit n'existe pas 
        die("ce produit n'exixte pas ");
    }
    //ajouter le produit dans le panier (le tableau)

    if(isset($_SESSION['commerce'][$id])){
        //si le produit est dejà dans le panier
        $_SESSION['commerce'][$id]++; //Represente la quantité
    }else {
        //si non on ajoute le produit
        $_SESSION['commerce'][$id]= 1;
       

        // echo "le produit a bien été mis dans le panier !";
        // //afficher le tableau associé au panier
        // var_dump($_SESSION['commerce']);

    }
     //redirection vers la page index.php
     header("location: index.php");
}

 ?>