<?php
$host = "localhost";
$dbname = "commerce";
$admin = "root";
$pass = "root";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $admin, $pass);
    $pdo->setAttribute(PDO::ATT_ERRMODE , PDO::ERRMODE_EXCEPTION);

}catch(PDOException  $e){
    die(prinr_r("erreur bdd:" .$e->getMessage()));
}
