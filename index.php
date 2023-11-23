
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="./style.css">
    <title>Site E_COMMERCE</title>
</head>
<body>
           <?php include ("nav.php"); ?>

           <?php include('connexionBDD.php');?>
       
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

<h1>Burkina shop</h1>
<h2>Ma commande en ligne</h2>

<!-- <button class="btn btn-primary">Visiter la page</button>
<button href="Inscription.php" class="btn btn-secondary">Commander ici</button>
 -->
</section>


<!-- <section class="featured-products">
        <div class="container">
        
        <div class="row">
         <div class="col-4">
         <?php
         //inclure la page de connexion
        
         include_once "con_dbb.php";

         $reponse=$bdd->query("SELECT * FROM produits");
         while($donnees=$reponse->fetch()){
            ?>
            <div>
            <a href="#"><img src="<?php echo $donnees['photo'];?>" alt="" > </a>
        </div>
        <div>
         <h3 class="fw-semibold mb-0 text-body-emphasis">
         <?php echo $donnees['titre'];?>
         </h3>
         <i class ="fa fa-star-o"></i>

         <p class="argent">
            <?php echo $donnees['prix'];?> </p>
         
         <a href="Blog.php" class="id_product" >Ajouter au panier</a>
        
           
        
        
       
        <?php }?>
        </div>
         </div>
        </div>
        </div>
        </section>
       -->
       <!-- <section class="kok">
         <h2>Les meuilleurs pagnes kokodonda</h2>
       <P>Nos pagnes kokodonda sont des pagnes realisées avec amour soin et delicatesse pour vous offrir des pagnes <br> typiquements Burkinabées surtout Bobolais
        Nous vous offrons nos meuilleurs <br> pagnes à un prix exceptionnelle qui defie toute concurerence
       </P> -->
       </section>
        <section class="featured-products">
        <div class="container">
            <div class="koko">
        <a href="Achat.php"><img src="ff.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="gg.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="deec.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="dee.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
        </div>
        <p class="argent">3000 fcfa</p>
        <div class="koko">
        <a href="Achat.php"><img src="doda.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="dond.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="ff.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="images.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        </div>
        <p class="argent">3000 fcfa</p>
        <div class="centre">
        <h1>Les pagnes modéle Africaine</h1>
       <P>Nos pagnes kokodonda sont des pagnes inspirées des valeurs representations et ideologiques de l'Afrique<br> typiquement Burkinabées surtout Bobolais pagnes à un prix exceptionnelle qui defie toute concurrence
       </P>
       </div>
        <div class="koko">
        <a href="Achat.php"><img src="cop.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop1.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop2.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop1.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        </div>  
         <p class="argent">3500 fcfa</p><br><br><br>
        <div class="koko">
        <a href="Achat.php"><img src="ff.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop3.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop6.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop1.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        </div>
        <p class="argent">3500 fcfa</p>
        <b><br></b>
        <div class="koko">
        <a href="Achat.php"><img src="cop5.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop1.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop2.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop4.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        </div>
        <p class="argent">3500 fcfa</p>
        
        <!-- <div class="row">
         <div class="col-4">
          <a href="Blog.php"><img src="ff.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
         <i class ="fa fa-star-o"></i>
         </div>
         <div class="col-4">
          <a href="Blog.php"><img  src="gg.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
         <i class ="fa fa-star-o"></i>
           </div>
           <div class="col-4">
            <a href="Blog.php"><img src="deec.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
         <i class ="fa fa-star-o"></i>
             </div>
             <div class="col-4">
            <a href="Blog.php"><img src="dee.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
         <i class ="fa fa-star-o"></i>
             </div>  
        </div> -->
        </div>
        </section>
        <!-- <section class="featured-products">
        <div class="container">
        
        <div class="row">
         <div class="col-4">
          <a href="Blog.php"><img src="pagne.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
         <img src="in1.jpg" alt="produit 1"> -->
         <!-- <i class="fa fa-star"aria-hidden="true"></i>
         <i class="fa fa-star"aria-hidden="true"></i>
         <i class="fa fa-star"aria-hidden="true"></i>
         <i class="fa fa-star-half-o"aria-hidden="true"></i> -->
         
         
         <!-- <i class ="fa fa-star-o"></i>
         <p class="argent">3500 fcfa </p>
         
         
         </div>
         <div class="col-4">
          <a href="Blog.php"><img  src="pagne.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
           <h3>des pagnes</h3>
         <i class="fa fa-star-half-o"aria-hidden="true"></i>
         <i class ="fa fa-star-o"></i>
           <p class="argent">5000 fcfa</p>
           </div>
           <div class="col-4">
            <a href="Blog.php"><img src="pagne.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
             <h3>kokodonda</h3>
         <i class ="fa fa-star-o"></i>
             <p class="argent">4000fcfa</p>
             </div>
             <div class="col-4">
            <a href="Blog.php"><img src="pagne.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
             <h3>traditionnel</h3>
         <i class ="fa fa-star-o"></i>
             <p class="argent">3000 fcfa</p>
             </div>
        </div>
        
        
        </div>
        
        </section>
        </section> -->
        <!-- <section class="featured-products">
        <div class="container">
        
        <div class="row">
         <div class="col-4">
          <a href="Blog.php"><img src="images.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
         <h3>des habits de hautes qualités</h3>
         <i class ="fa fa-star-o"></i>
         <p class="argent">3500 fcfa </p>
         </div>
         <div class="col-4">
          <a href="Blog.php"><img  src="images.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
           <h3>des pagnes</h3>
         <i class="fa fa-star-half-o"aria-hidden="true"></i>
         <i class ="fa fa-star-o"></i>
           <p class="argent">5000 fcfa</p>
           </div>
           <div class="col-4">
            <a href="Blog.php"><img src="images.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
             <h3>kokodonda</h3>
         <i class ="fa fa-star-o"></i>
             <p class="argent">4000fcfa</p>
             </div>
             <div class="col-4">
            <a href="Blog.php"><img src="images.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
             <h3>traditionnel</h3>
         <i class ="fa fa-star-o"></i>
             <p class="argent">3000 fcfa</p>
             </div>
        </div>
        </div>
        </section>  -->
<h1>La structure</h1>
<section class="home-next">

<p>Le site Burkina"Shop" est un site en ligne qui vous permet de faciliter 
    vos achats partout au  Burkina faso sans deplacemment et à moindre coùt. 
Ma mission à travers le site en effet c'est de faciliter les achats. Chez Burkina shop, nous pensons que le développement du pays passe 
par une progression des affaires réalisées par les acteurs économiques locaux.

Nous sommes convaincu que les pub des articles aideront à servir cette finalité.
 C'est pourquoi nous développons et popularisons des services en ligne dédiés qui permettent de favoriser
 les interactions économiques entre tous les professionnels Burkinabè.</p>
 <img src="./sim.jpg" alt="">
</section>
     
<section class="visite">
<div class="row row-cols-1 row-cols-md-4 g-10">
    <div class="col">
<div class="card">
    <div class="card-body">
        <img src="./equipe.jpg" alt="">
        <h2>Entreprise</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Doloribus voluptatem quidem unde praesentium nesciunt, 
             </p>
             <a href="Galerie.php" class="btn btn-primary">Decouvrez</a>
            </div>
            </div>
            </div>
            <div class="col">
    <div class="card">
    <div class="card-body">
        <img  src="./cours en ligne.jpg" alt="">
        <h2>Achat</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Doloribus voluptatem quidem unde praesentium nesciunt, 
             </p>
             <a href="Achat.php" class="btn btn-primary">Decouvrez</a>
    </div>
    </div>
    </div>
    <div class="col">
<div class="card">
    <div class="card-body">
        <img class='pho' src="./shop.jfif" alt="">
        <h2>Contact</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Doloribus voluptatem quidem unde praesentium nesciunt, 
             </p>
             <a href="Contact.php" class="btn btn-primary">Decouvrez</a>
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
    <p>Suis trés ravie de travaillée avec Burkina shop ils me satisfait à chaque commande</p>
 </div>
 <div>
    <img src="2.jpg" alt="">
    <h2>kiem Ridoss</h2>
    <p>Un site facile à utilisé et trés pratique merci à vous</p>
 </div>
 <div>
    <img src="2.jpg" alt="">
    <h2>ridoss fari</h2>
    <p>Mmerci pour la fiabilité de vos produits et votre disponiblités</p>
 </div>
    </div>
</section>
<!-- lier footer -->
<?php include ("Footer.php")?> 

    </body>
</html>