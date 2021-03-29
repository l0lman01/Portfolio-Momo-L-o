<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Projet: Jeu de l'Oie</title>
    <?php
    require 'navbar.php';
    ?>
    <h1>JEU DE L'OIE</h1>
    <img src="img/oie.png" alt="">
    <p>Projet 2 : ALGORYTHMIE. <br/> le jeu est codé en python par Mohamed Kharrat et Eliot Cros.</p>
    <br/>
    <p><a href="https://imruki.itch.io/la-castagne" target="_blank">Cliquez ici pour télécharger le jeu </a></p>
    <img src="img/jeu de l'oie.JPG" alt="Jeu de l'oie, Python">
    <br/>

    <h3>CHOISIS LA COULEUR QUE TU VEUX</h3>
    <br/>
    <br/>
    <div class="container jeu" style="width:20%">
      <div class="carousel carousel-slider center pions">
        <div class="carousel-fixed-item center">
        </div>
        <div class="carousel-item" href="#one!">
          <img src="img/pionblanc.png" alt="">
        </div>
        <div class="carousel-item" href="#two!">
          <img src="img/pionbleu.png" alt="">

        </div>
        <div class="carousel-item" href="#three!">
          <img src="img/pionjaune.png" alt="">

        </div>
        <div class="carousel-item" href="#four!">
          <img src="img/pionnoir.png" alt="">
        </div>
        <div class="carousel-item" href="#five!">
          <img src="img/pionrose.png" alt="">
        </div>
        <div class="carousel-item" href="#six!">
          <img src="img/pionvert.png" alt="">
        </div>
        <div class="carousel-item" href="#seven!">
          <img src="img/pionviolet.png" alt="">
        </div>
      </div>
    </div>

    <p>Mohamed à conçu le jeu virtuellement grâce à Unity qui se joue localement. <br/>
     Voici à quoi ressemble le jeu sur Unity:</p>
    <div class="container jeu">
      <div class="carousel carousel-slider center castagne">
        <div class="carousel-fixed-item center">

        </div>
        <div class="carousel-item" href="#one!">
          <img src="img/oie1.jpg" alt="La Castagne-Menu, Unity">
        </div>
        <div class="carousel-item" href="#two!">
          <img src="img/oie2.JPG" alt="La Castagne-Règles, Unity">

        </div>
        <div class="carousel-item" href="#three!">
          <img src="img/oie3.JPG" alt="La Castagne-1">

        </div>
        <div class="carousel-item" href="#four!">
          <img src="img/oie4.JPG" alt="La Castagne-2">
        </div>
      </div>
    </div>
    <br/>
    <?php
    $page="oie";
    require 'reviewform.php';
    ?>
    <div id="reviews">

    </div>
    <?php
    require 'footer.php';
    ?>
  </body>
</html>
