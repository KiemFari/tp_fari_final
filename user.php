<?php

include 'connect.php';

if(isset($_POST['SUBMIT'])){
    $nom=$_POST['nom'];
 $email=$_POST['email'];
 $numero=$_POST['numero'];
 $password=$_POST['password'];


 $sql ="insert into   'crud' (nom, email,numero,password)
 values('$nom','$email','$numero','$password')";
 $result=mysqli_query($con,$sql);
 if($result){
    echo "base de donnée inserer avec success";
 } else {
    die(mysqli_error($con));
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
<div class="contenaire my-5">
        <button class="but"><a href="admin.php">Se connecter</a></button>

        <h1>User</h1>
        <form action="" method="POST" >
            <div class="form-group">
                <label for="">Nom</label>
            <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom" auto-complete="off">
            </div>
            <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Entrez votre Email" auto-complete="off">
            </div>
            <div class="form-group">
            <label for="">Numero</label>
            <input type="text" name="numero"  placeholder="Entrez votre numero" auto-complete="off">
            </div>
            <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" name="password" placeholder="Entrez votre mot de passe" auto-complete="off">
            </div>
            <input type="submit" value="VALIDE" name="SUBMIT" class="submit">

            <!-- <div><?php echo $err?></div>
            <div style="color: red;     font-family:Arial, sans-serif;"><?php echo $erreur?></div> -->
        </form>
        <img src="image/img4.png" alt="" width="200px" >
        
    </div>









<!-- 

<div class="mb-3 row">
<label for="staticEmail" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticName">
    </div>
<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">Numero</label>
    <div class="col-sm-10">
      <input type="number" readonly class="form-control-plaintext" id="staticNumber" >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div> -->
</body>
</html>