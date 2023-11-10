
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
    <title>Site E_COMMERCE</title>
</head>
<body>
    <?php include ("nav.php"); ?>
       
     <!-- <?php include ("fari.php"); ?>  -->
<!-- <header> 
         <nav>
            <ul>
                <li><a href="Acceuil.php">Acceuil</a></li>
                <li><a href="Service.php">Service</a></li>
                <li><a href="Galerie.php">Galerie culturelle</a></li>
                <li><a href="Contact.php">Contacter</a></li>
            </ul>
            <a href="" class="btn-reservation">Visiter Maintenant</a>
        </nav> 
    
    </header> -->
    <section>
        
            <h1>Annuaires des entreprises prèsentes</h1><br>
            <div class="entre">
           <h2>Les professionnelles se presentent</h2>
           <p>ILS presentent leurs produits à travers le site web , avec une possibilitès de commander en ligne et de recevoir les produits sous livraison ,possiblitès de payement en ligne</p>
           <a href="inscription.php">inscriver votre entreprise sur "Ma commande"</a>
        </div>

        <span></span>
       
        <span></span>

    </section>
<!-- ------acceuil section --------->
<div class="row row-cols-1 row-cols-md-4 g-10">
  <div class="col">
    <div class="card">
      <img src="shop.jfif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ridoss shop</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
     <a href="">habit femme</a><br>
     <a href="">habit homme</a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="bazin.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bazin KNB</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <a href="">vente bazin</a><br>
    <a href="">vente pagne</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="pagne.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">pagne traditionnel</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="">pagne traditionel</a><br>
            <a href="">Mossi et autres</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="koko.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> pagne kokodonda</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="">vente kokodonda</a><br>
        <a href="">bogolan et pagne afrique</a>
      </div>
    </div>
  </div>
</div>
<!-- lier footer -->
<?php include ("Footer.php")?>

    </body>
</html>