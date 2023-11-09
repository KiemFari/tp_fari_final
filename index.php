
<!-- <?php
  session_start();
  session_destroy();
  if( isset($_SESSION['id_user']) && !empty($_SESSION['id_user']) ){

    header("location:connexion.php");
    exit;

}else{
      
 } 

?> -->
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
<!-- ------acceuil section --------->
<section class="home" style="">
<h2>E_commerce</h2>
<h1>MA COMMANDE EN LIGNE</h1>
<P>UN SITE DE COMMERCE EN LIGNE QUI VOUS FACILITE VOS ACHATS A TRAVERS LE BURKINA FASO</P>
<button class="btn btn-primary">Visiter la page</button>
<button href="Inscription.php" class="btn btn-secondary">Commander ici</button>


</section>
<section class="home-next">
<h1>La structure</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Sapiente soluta tenetur expedita, quisquam incidunt ratione
     repellat reprehenderit veritatis atque fugit ex ea.
     Aspernatur ut sequi labore maxime quibusdam eius nulla? Lorem
      ipsum, dolor sit amet consectetur adipisicing elit.
       Cumque enim soluta eius, aut blanditiis fugit officia quisquam,
        sapiente minus quibusdam rerum quod? Odit aliquam ea doloremque
         quidem mollitia tempora sed! Lorem ipsum dolor sit amet consectetur, 
         adipisicing elit. Esse corporis adipisci nam similique mollitia asperiores
          vitae minus odio modi eveniet accusamus hic placeat, consequuntur officiis,
           reprehenderit exercitationem neque consectetur aliquid?</p>
</section>
<section class="visite">
<div class="card">
    <div class="card-body">
        <img src="./2.jpg" alt="">
        <h2>Achat</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Doloribus voluptatem quidem unde praesentium nesciunt, 
             nisi corporis repellendus ab porro perferendis
             iste vero numquam labore ratione vel veniam laborum. Eveniet, cum?</p>
             <button class="btn btn-primary">Decouvrez</button>
            </div>
    
    <div class="card-body">
        <img src="./2.jpg" alt="">
        <h2>Galerie</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Doloribus voluptatem quidem unde praesentium nesciunt, 
             nisi corporis repellendus ab porro perferendis
             iste vero numquam labore ratione vel veniam laborum. Eveniet, cum?</p>
             <button class="btn btn-primary">Decouvrez</button>
    </div>
    <div class="card-body">
        <img src="./2.jpg" alt="">
        <h2>Blog</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Doloribus voluptatem quidem unde praesentium nesciunt, 
             nisi corporis repellendus ab porro perferendis
             iste vero numquam labore ratione vel veniam laborum. Eveniet, cum?</p>
             <button class="btn btn-primary">Decouvrez</button>
    </div>
</div>
</section>

 <!------- Call to Action ------>

 <section class="cta">
        <h1>Suivez nous partout dans le monde </h1>
        <a href="contact.php" class="hero-btn">CONTACTER NOUS</a>
    </section>

<!-- lier footer -->
<!-- <?php include ("footer.php")?> -->

    </body>
</html>