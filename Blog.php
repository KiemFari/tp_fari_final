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
    <title>Panier</title>
</head>
<body >

  <div class="panier">
    <?php include ("nav.php"); ?>
   

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
    <tr>
      
      <td><img src="images.jpg" alt=""></td>
      <td>Des habits de hautes qualités</td>
      <td>3500fcfa</td>
      <td>5</td> 
      <td><img src="trash-outline.svg" alt=""></td>
    </tr>
    <tr class="total">
    <th>Total : 10000fcfa</th>
    </tr>
  </table>
</section>
</div>
    <!-- lier footer -->
<?php include ("Footer.php")?>

</body>
</html>