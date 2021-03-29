<?php
require 'config.php';
?>
<!DOCTYPE HTML>
<html lang="en" dir="ltr">
  <head>
    <title class="titre">Projet Framework CSS/JSS</title>
    <?php
    require 'navbar.php';
    ?>

    <h2>TAKE A LOOK <br/> AT OUR TOP <br/> 3 PROJECTS</h2>
    <h4>> FH4 Website<br/> > La Castagne <br/> > Jeu de l'oie</h4>
      <div class="carousel showcase">
         <a class="carousel-item" href="castagne.php"><img src="img/Castagne.png"></a>
         <a class="carousel-item" href="forza.php"><img id='anchorforza' src="img/forzalogo.png"></a>
         <a class="carousel-item" href="oie.php"><img src="img/oie.png"></a>
     </div>


  <?php
  $page = "index";
  require 'footer.php';
  ?>

  </body>
</php>
