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
    <!-- lier footer -->
<?php include ("Footer.php")?>

</body>
</html>