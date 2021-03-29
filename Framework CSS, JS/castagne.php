<?php
require 'config.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Projet: Castagne</title>
    <?php
    require 'navbar.php';
     ?>

   </br>
   <img src="img/Castagne.png" alt="">
   </br>
   <p>Projet : Initiation au Game Design. <br/></p>
   <p>La Castagne est un jeu que Mohamed Kharrat, Léo Pham-vu, Eliot Cros et <br/> Hugo Vincens aient crée pour le projet du game design. <br/> Ce jeu reprend la base du fameux jeu de carte de la Bataille, <br/> mais nous l'avons façonné
   de manière plus amusant.  <br/></p>
    <br/>
    <p><a href="img/castagne.pdf" target="_blank">Cliquez ici pour voir le Slide en PDF</a></p>
      <div class="container jeu">
        <div class="carousel carousel-slider center castagne">
          <div class="carousel-fixed-item center">
          </div>
          <div class="carousel-item" href="#one!">
            <img src="img/cast2.JPG" alt="La Castagne-Règles, Unity">

          </div>
          <div class="carousel-item" href="#two!">
            <img src="img/cast3.jpg" alt="La Castagne-1">

          </div>
          <div class="carousel-item" href="#three!">
            <img src="img/cast4.JPG" alt="La Castagne-2">
          </div>
        </div>
      </div>
      <br/>
     <br/>
    <p><a href="img/resume.pdf" target="_blank">Cliquez ici pour voir le Resumé du Jeu</a></p>
    <img src="img/memo.png" class="memo" alt="">
<p> Ça se joue avec un paquet de cartes classique et si vous n'avez pas,  <br/> ce n'est pas grave car Mohamed à conçu le jeu virtuellement grâce à Unity <br/> qui se joue localement.
 Voici à quoi ressemble le jeu sur Unity:</p>
    <br/>
    <p><a href="https://imruki.itch.io/la-castagne" target="_blank">Cliquez ici pour télécharger le jeu </a></p>
      <div class="container jeu">
        <div class="carousel carousel-slider center castagne">
          <div class="carousel-fixed-item center">

          </div>
          <div class="carousel-item" href="#one!">
            <img src="img/castagne2.png" alt="La Castagne-Menu, Unity">
          </div>
          <div class="carousel-item" href="#two!">
            <img src="img/castagne3.JPG" alt="La Castagne-Règles, Unity">

          </div>
          <div class="carousel-item" href="#three!">
            <img src="img/castagne1.png" alt="La Castagne-1">

          </div>
          <div class="carousel-item" href="#four!">
            <img src="img/castagne4.JPG" alt="La Castagne-2">
          </div>
        </div>
      </div>
      <br/>
      <br/>
    <?php
    $page="castagne";
    require 'reviewform.php';
    ?>
    <div id="reviews">

    </div>
    <?php
    require 'footer.php';
    ?>
  </body>
</html>
