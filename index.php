
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
<h2>Ma commande en ligne</h2>
<h1>Burkina shop</h1>
<P>UN SITE DE COMMERCE EN LIGNE QUI VOUS FACILITE VOS ACHATS A TRAVERS LE BURKINA FASO</P>
<button class="btn btn-primary">Visiter la page</button>
<button href="Inscription.php" class="btn btn-secondary">Commander ici</button>


</section>
<section class="home-next">
<h1>La structure</h1>
<p>Le site Burkina"Shop" est un site en ligne qui vous permet de faciliter 
    vos achats partout au  Burkina faso sans deplacemment et à moindre coùt. 
ma mission à travers le site en effet c'est de faciliter  chez Burkina shop, nous pensons que le développement du pays passe 
par une progression des affaires réalisées par les acteurs économiques locaux.

Nous sommes convaincus que les pub des articles aideront à servir cette finalité.
 C'est pourquoi nous développons et popularisons des services en ligne dédiés qui permettent de favoriser
 les interactions économiques entre tous les professionnels Burkinabè.</p>
</section>
<section class="visite">
<div class="row row-cols-1 row-cols-md-4 g-10">
    <div class="col">
<div class="card">
    <div class="card-body">
        <img src="./2.jpg" alt="">
        <h2>Entreprise</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Doloribus voluptatem quidem unde praesentium nesciunt, 
             </p>
             <button href="Galerie.php" class="btn btn-primary">Decouvrez</button>
            </div>
            </div>
            </div>
            <div class="col">
    <div class="card">
    <div class="card-body">
        <img src="./2.jpg" alt="">
        <h2>Achat</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Doloribus voluptatem quidem unde praesentium nesciunt, 
             </p>
             <button href="Achat.php" class="btn btn-primary">Decouvrez</button>
    </div>
    </div>
    </div>
    <div class="col">
<div class="card">
    <div class="card-body">
        <img src="./2.jpg" alt="">
        <h2>Blog</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Doloribus voluptatem quidem unde praesentium nesciunt, 
             </p>
             <button href="Blog.php" class="btn btn-primary">Decouvrez</button>
    </div>
    </div>
</div>
</div>
</section>





 <!------- Call to Action ------>

 <section class="cta">
        <h1>Suivez nous partout au burkina faso </h1>
        <a href="contact.php" class="hero-btn">CONTACTER NOUS</a>
    </section>
    <!--------------- temoignage --------------->
<section>
<h1>Témoignage de nos internautes</h1>
    <div class="tamoigne">
 
 <div>
    <img src="2.jpg" alt="">
    <h2>fari kiem</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Iste odit praesentium voluptatibus explicabo, tempore in dignissimos
         blanditiis deleniti at iure!
         Dicta minus aut sunt? Neque mollitia officia eaque! Eaque, nostrum?</p>
 </div>
 <div>
    <img src="2.jpg" alt="">
    <h2>kiem Ridoss</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Iste odit praesentium voluptatibus explicabo, tempore in dignissimos
         blanditiis deleniti at iure!
         Dicta minus aut sunt? Neque mollitia officia eaque! Eaque, nostrum?</p>
 </div>
 <div>
    <img src="2.jpg" alt="">
    <h2>ridoss fari</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Iste odit praesentium voluptatibus explicabo, tempore in dignissimos
         blanditiis deleniti at iure!
         Dicta minus aut sunt? Neque mollitia officia eaque! Eaque, nostrum?</p>
 </div>
    </div>
</section>
<!-- lier footer -->
<?php include ("Footer.php")?> 

    </body>
</html>