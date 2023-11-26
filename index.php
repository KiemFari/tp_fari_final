
 <?php
  session_start();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
 integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
   rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./panier.css">
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
<section class="fari">
    <!-- afficher le nombre de produit dans le panier -->


         <a href="panier.php" class="link">Panier<span><?=array_sum($_SESSION['commerce'])?></span></a>

         <section class="products_list">
         <?php
         //inclure la page de connexion
        
         include_once "con_dbb.php";

         //afficher les produits 
         $req= mysqli_query( $con, "SELECT * FROM panier");
         while($row = mysqli_fetch_assoc($req)){
            ?>
            <form action="" class="product">
            <div class="image_product">
                <img src="<?=$row['img']?>">
            </div>
            <div class="content">
                <h4 class="name"><?=$row['nom']?></h4>
                <h2 class="price"><?=$row['price']?></h2>
                <a href="ajouter_panier.php?id=<?=$row['id']?>" class="id_product">Ajouter au panier</a>
            </div>
        </form>
        <?php }?>
          
            <!-- <form action="" class="product">
                <div class="image_product">
                    <img src="./gg.jpg" alt="">
                </div>
                <div class="content">
                    <h4 class="name">texture mou et lourd</h4>
                    <h2 class="price">3000fcfa</h2>
                    <a href="#" class="id_product">Ajouter au panier</a>
                </div>
            </form>
            <form action="" class="product">
                <div class="image_product">
                    <img src="./deec.jpg" alt="">
                </div>
                <div class="content">
                    <h4 class="name">texture mou et lourd</h4>
                    <h2 class="price">3000fcfa</h2>
                    <a href="#" class="id_product">Ajouter au panier</a>
                </div>
            </form>
            <form action="" class="product">
                <div class="image_product">
                    <img src="./dee.jpg" alt="">
                </div>
                <div class="content">
                    <h4 class="name">texture mou et lourd</h4>
                    <h2 class="price">3000fcfa</h2>
                    <a href="#" class="id_product">Ajouter au panier</a>
                </div>
            </form> -->
         </section>  
         <h1>Les pagnes modéle Africaine</h1>
       <P>Nos pagnes kokodonda sont des pagnes inspirées des valeurs representations et ideologiques de l'Afrique<br> typiquement Burkinabées surtout Bobolais pagnes à un prix exceptionnelle qui defie toute concurrence
       </P> 
         <section class="products_list">
            <form action="" class="product">
                <div class="image_product">
                    <img src="./cop4.jpg" alt="">
                </div>
                <div class="content">
                    <h4 class="name">texture mou</h4>
                    <h2 class="price">3500fcfa</h2>
                    <a href="#" class="id_product">Ajouter au panier</a>
                </div>
            </form>
            <form action="" class="product">
                <div class="image_product">
                    <img src="./cop6.jpg" alt="">
                </div>
                <div class="content">
                    <h4 class="name">texture mou</h4>
                    <h2 class="price">3500fcfa</h2>
                    <a href="#" class="id_product">Ajouter au panier</a>
                </div>
            </form>
            <form action="" class="product">
                <div class="image_product">
                    <img src="./cop2.jpg" alt="">
                </div>
                <div class="content">
                    <h4 class="name">texture mou</h4>
                    <h2 class="price">3500fcfa</h2>
                    <a href="#" class="id_product">Ajouter au panier</a>
                </div>
            </form>
            <form action="" class="product">
                <div class="image_product">
                    <img src="./cop.jpg" alt="">
                </div>
                <div class="content">
                    <h4 class="name">texture mou</h4>
                    <h2 class="price">3500fcfa</h2>
                    <a href="#" class="id_product">Ajouter au panier</a>
                </div>
            </form>
         </section>   

         </section>












       <!-- </section>
        <section class="featured-products">
        <div class="container">
            <div class="koko">
        <a href="Achat.php"><img src="ff.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="gg.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="deec.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="dee.jpg" title="Burkna pagne" alt="insérer la description ici"></a>
        </div>
        <p class="argent">3000 fcfa</p> <a href="Achat.php" class="argent">Cliquer ici</a>
        <div class="koko">
        <a href="Achat.php"><img src="doda.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="dond.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="ff.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="images.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        </div>
        <p class="argent">3000 fcfa</p> <a href="Achat.php" class="argent">Cliquer ici</a>
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
         <p class="argent">3500 fcfa</p> <a href="Achat.php" class="argent">Cliquer ici</a><br><br><br>
        <div class="koko">
        <a href="Achat.php"><img src="ff.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop3.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop6.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop1.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        </div>
        <p class="argent">3500 fcfa</p>
        <a href="Achat.php" class="argent">Cliquer ici</a>
        <b><br></b>
        <div class="koko">
        <a href="Achat.php"><img src="cop5.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop1.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop2.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        <a href="Achat.php"><img src="cop4.jpg" title="Burkina pagne" alt="insérer la description ici"></a>
        </div> 
        <p class="argent">3500 fcfa</p>
        <a href="Achat.php" class="argent">Cliquer ici</a> -->
        
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
        <!-- </div>
        </section> -->
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

     
<!-- <section class="visite">
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
</section> -->
    <div class="tie">
        <div id="C'est parti!!!!" class="wi">C'est parti !!!!</div>
        <h1>Notre site en trois principes</h1>
    </div>
    <div class="container-2">
        <div class="leftside">
            <p class="si">01</p>
            <h1>Visiter notre page et appreciez nos produits</h1>
            <p>Nous sommes un site professionnel qui sauvegarde vos information et les securise </p>
            <p> afin d'eviter des desagrements face à nos clients  <br> satisfaire et protéger nos clients </p>
            <p>font partis de nos priorités</p>
        </div>
        <div class="rightside">
            <img class="a" src="t1.jpg">
        </div>
    </div>
    <div class="container-3">
        <div class="leftside">
            <img class="a" src="t2.jpg">
        </div>
        <div class="rightside1">
            <p class="si">02</p>
            <h1>Approbation et achat </h1>
            <p>Nous vous donnons l'occasion de pouvoir voir vos articles et de les modifier avant de solder </p>
            <p> Nous sommes en colaboration avec les agences mobile money et banque afin de vous faciliter vos payements</p>
            
        </div>

    </div>
    <div class="container-4">
        <div class="leftside">
            <p class="si">03</p>
            <h1>Receptionnez votre colis</h1>
            <p>Nous avons un service qualités en matiére de livraison expédition</p>
            <p>vous serez ravie de votre commande et de votre livraison </p>
            <p>N'hesitez pas à nous laisser un message retour afin d'encourager nos futurs clients</p>
        </div>
        <div class="rightside">
            <img class="a" src="t3.jpg">
        </div>
        <!-- </section> -->
    </div>


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
    <img src="koka.jpg" alt="">
    <h2>kiem Ridoss</h2>
    <p>Un site facile à utilisé et trés pratique merci à vous</p>
 </div>
 <div>
    <img src="call.jpg" alt="">
    <h2>ridoss fari</h2>
    <p>Mmerci pour la fiabilité de vos produits et votre disponiblités</p>
 </div>
    </div>
</section>
<!-- lier footer -->
<?php include ("Footer.php")?> 

    </body>
</html>