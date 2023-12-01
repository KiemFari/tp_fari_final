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
  <link rel="stylesheet" href="./contact.css">
    <title>Page contact  </title>
</head>
<body>
    <?php include ("nav.php"); ?>
<section class="contact">
<h1>
Contactez Burkina"shop", l'ensemble de notre site  est  à votre service</h1>
<p>Vous avez besoin d'une information ou d'une demande de produits, utilisez le formulaire de contact ou appelez directement nos équipes locales.
</p>
</section>
<!-- </section>
<section id="contact">
        <h2>On y va ????????</h2>
        <p>Qu'attendez-vous pour profiter de nos offres exceptionnelles Envoyez-nous 
            votre demande par mail au formulaire ci-dessous et nous vous renverrons un devis 
       <strong>gratuit</strong> sous 48h.</p>
       <form action="mailto:kiemtorefariratou@gmail.com" method="post" enctype="text/plain">
        <label for="nom">Votre nom et prénom :</label>
        <input type="text" id="nom" name=" Votre nom" required>
        <label for="email">Votre email ici :</label>
        <input type="email" id="email" name=" Votre email" required>
        <label for="telephone">telephone :</label>
        <input type="telephone" id="telephone" name=" votre telephone" required>
        <label for="message">votre message :</label>
        <textarea name="message" placeholder="Votre message"  rows="10" class="form-control" required></textarea>
       
        <a href="conta.php" type="submit">Envoyer !</a>
        <p>*Vous serez redirigé vers votre messagerie . <br> Il vous suffira d'envoyer le mail 
        automatiquement crée *</p>
      
        </form>
    </section>
     --> 
     <br><br>
<section class="container">
<div class="loca">
<div class="rows">
  <div class="col-lg-6">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998711.40902232!2d-7.452187973861998!3d11.923645048323783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe34fb1976c3a2dd%3A0xd28c95fbc2b46389!2sMosques%20HAIDARA!5e0!3m2!1sfr!2sbf!4v1701428394276!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

<div class="col-lg-6">
<form">

  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" name="nom" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Name</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" id="form4Example2" class="form-control" />
    <label class="form-label" for="form4Example2">Email</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" type="texte" name="mess" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="form4Example3">Message</label>
  </div>


  <!-- Submit button -->
  <a href="conta.php" type="submit" class="btn btn-primary">Envoyer !</a>
  <!-- <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Send</button> -->
</form>
</div>



</div>

  </div>

  </section>
    <!-- lier footer -->
<?php include ("Footer.php")?>

</body>
</html>