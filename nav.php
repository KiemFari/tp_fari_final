<?php
session_start();
include('connexionBDD.php');
?>
<header>

    <div class="logo">
        
<a href="index.php">BURKINA"SHOP"</a>
    </div>
    <!-- <nav>
      <div class="conteneur-nav">
      <label for="mobile"></label>
      <input type="checkbox" id="mobile" role="button">
        <ul>
            <h1>BURKINA SHOP</h1>
            <li><a href="index.php">ACCEUIL</a></li>
          <li class="deroulant"><a href="Galerie.php">Entreprise &ensp;</a>
            <ul class="sous">
              <li><a href="Entreprise.php">Entreprise</a></li>
            <li><a  href="Catalogue.php">Catalogue</a></li>
             <li><a  href="modele.php"> Idée modele à coudre</a></li>
            <li><a href="service.php">nos services</a></li>
            </ul>
          </li>
          <li><a href="Achat.php">ACHAT</a></li>
          <li><a href="contact.php">CONTACTER</a></li>
        </ul>
      </div>
    </nav> -->





    
<nav>
            <ul class="menu">
                <li><a href="index.php">Acceuil</a></li>
                <!-- <li class="nav-item Entreprise">
                <a class="nav-link dropdown-toggle" href="Galerie.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Entreprises
                </a>
                <ul class="select">
                  <li><a class="dropdown-item" href="Entreprise.php">Entreprise</a></li>
                  <li><a class="dropdown-item" href="Catalogue.php">Catalogue</a></li>
                   <li><a class="dropdown-item" href="modele.php"> Idée modele à coudre</a></li>
                  <li><a class="dropdown-item" href="service.php">nos services</a></li>
                </ul>
              </li>  --> 
                 <!-- <select id="selectOptions" onchange="redirectToPage()"> -->
                 <!-- <select name="selectionner les options" id="page">
           
            <option selected>Sélectionner les options
        </option>
        <li><a href="Entreprise.php"><option>Entreprise</option></a></li> 
        <li> <a href="Catalogue.php"><option>Catalogue</option></a></li> 
        <li>  <a href="modele.php"><option >Idée de modele</option></a></li> 
        <li>  <a href="service.php"><option >Nos services</option></a></li> 
    </select> -->
    <!-- <form action="select">
  <label for="selected"></label>
  <select id="selectOptions" onchange="redirectToPage()">
    <option value="modele.php">modele</option>
    <option value="Catalogue.php">Catalogue</option>
    <option value="servive.php">service</option>
    <option value="Entreprise.php">Entreprise</option>
  </select>
</form> -->

<li><a href="Entreprise.php">A propos</a></li>
                <!-- <li><a href="Achat.php">Achat</a></li> -->
                <li><a href="contact.php">Contact</a></li>
                <?php if(isset($_SESSION['nom'])){?>
                  <?php echo  '<a href="#"><button class="btn btn-success">'.''.$_SESSION['nom'].'</button></a>';?>
                  <?php echo  '<a href="deconnexion.php"><button class="btn btn-info">Deconnexion</button></a>';?>
                  <?php } else { ?>
                    <a href="inscription.php"   class="btn btn-success">inscription</a>
                    <br>
                <a href="connexion.php"  class="btn btn-success">connexion</a>
                <?php } ?>
               
                
                <!-- <li><a href="deconnexion.php">deconnexion</a></li> -->
                <li><a href="panier.php">Panier</a></li>
            </ul>
          
        </nav>
        
        </header> 
