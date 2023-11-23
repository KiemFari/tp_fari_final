<?php 
//connexion à la base de donnes
$con =mysqli_connect("localhost", "root" , "");
//verifier la connexion
if(!$con) die('Erreur :' .mysqli_connect_error());

//afficher la liste des produits
$req = mysqli_query($con, "SELECT * FROM panier")


?>
