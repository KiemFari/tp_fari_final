<?php 
//connexion à la base de données
$con =mysqli_connect("localhost", "root" , "", "commerce");
//verifier la connexion
if(!$con) die('Erreur :' .mysqli_connect_error());

//afficher la liste des produits
$req = mysqli_query($con, "SELECT * FROM panier")


?>
