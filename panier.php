<?php 
session_start();
include_once "con_dbb.php";

//supprimer les produits si 
//si la variable del existe
if(isset($_GET['del'])){
  $id_del = $_GET['del'] ;
  //suppression
  unset($_SESSION['commerce'][ $id_del ]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
 integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
   rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./panier.css">
    <title>Panier</title>
</head>
<body>

    <?php include ("nav.php"); ?>
   
<div  class="panier">
<section>
<a href="index.php" class="link">Boutique</a>
  <table>
    <tr>
      <th></th>
      <th>Nom</th>
      <th>Prix</th>
      <th>Quantité</th>
      <th>Action</th>
    </tr>
    <?php 
    $total = 0;
    //liste des produits
    //recuperer les clés du tableau session
    $ids = array_keys($_SESSION['commerce']);

    //s'il n'y a aucune clé dans le tableau
    if (empty($ids)) {
      echo "votre panier est vide";
    }else {
      //si oui 
      $paniers = mysqli_query($con, "SELECT * FROM panier WHERE id IN (".implode(',', $ids).")");

      //liste des produits avec une boucle foreach
      foreach($paniers as $panier):
        //calculer le total (prix unitaire * quantité)
        //et additionner chaque résultats à chaque tours du boucle
        $total =  $total+ $panier['price'] * $_SESSION['commerce'][$panier['id']];
    ?>
    <tr>
      
      <td><img src="<?=$panier['img']?>"></td>
      <td><?=$panier['nom']?></td>
      <td><?=$panier['price']?></td>
      <td><?=$_SESSION['commerce'][$panier['id']] //quantité?></td> 
      <td> <a href="panier.php?del=<?=$panier['id']?>"><img src="trash-outline.svg"></a></td>
    </tr>

    <?php endforeach ;} ?>  

    <tr class="total">
    <th>Total : <?=$total?>fcfa</th>
    
    </tr>
    
  </table>
  <h2>Option de paiement</h2>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
  orange money
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
     Ligdi cash
  </label> <br>
  <boutton class="btn btn-primary">Payer</boutton>
  <!-- <a href="https://wa.me/+75413359">
<a href="https://facebook.me/+75413359"></a>
<i class="fa-brands fa-whatsapp" style="color: #82f028; class="logocal"></i>
<i class="fa-brands fa-facebook" style="color: #105ce0; class="logocal"></i>

</a>
</a> -->
</div>

  <!-- <table>
    <tr>
      <th></th>
      <th>Nom</th>
      <th>Prix</th>
      <th>Quantité</th>
      <th>Action</th>
    </tr>
    <tr>
      
      <td><img src="./ff.jpg"></td>
      <td>texture mou et lourd</td>
      <td>3000fcfa</td>
      <td>5</td> 
      <td><img src="trash-outline.svg" alt=""></td>
    </tr>
    <tr class="total">
    <th>Total : 15000fcfa</th>
    </tr>
  </table>
  <table>
    <tr>
      <th></th>
      <th>Nom</th>
      <th>Prix</th>
      <th>Quantité</th>
      <th>Action</th>
    </tr>
    <tr>
      
      <td><img src="./ff.jpg"></td>
      <td>texture mou et lourd</td>
      <td>3000fcfa</td>
      <td>5</td> 
      <td><img src="trash-outline.svg" alt=""></td>
    </tr>th
    <tr class="total">
    <th>Total : 15000fcfa</>
    </tr>
  </table>
  <table>
    <tr>
      <th></th>
      <th>Nom</th>
      <th>Prix</th>
      <th>Quantité</th>
      <th>Action</th>
    </tr>
    <tr>
      
      <td><img src="./ff.jpg"></td>
      <td>texture mou et lourd</td>
      <td>3000fcfa</td>
      <td>5</td> 
      <td><img src="trash-outline.svg" alt=""></td>
    </tr>
    <tr class="total">
    <th>Total : 15000fcfa</th>
    </tr>
  </table> -->
</section>
</div>
    <!-- lier footer -->
<?php include ("Footer.php")?>

</body>
</html>