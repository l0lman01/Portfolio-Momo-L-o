<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Projet Site Web: Forza 4</title>
    <?php
    require 'navbar.php';
    ?>
</br></br></br>

    <img id='bgforza' src='img/forzalogo2.png' alt=''>
    </br></br></br>
        <p>Projet : HTML/CSS en Collaboration avec les GBS et les GArt. <br/></p>
        <img src="img/instafh4.jpg" alt="">
        <p>Forza Horizon 4 est un site que Mohamed Kharrat, Samuel Hermabessiere (GBS) <br/> et Marwane Adourkane (GArt) aient crée pour le projet HTML/CSS. <br/> Ce projet consiste a développer en HTML/CSS un site web d'un jeu préféré. <br/> Dans notre cas , on a choisit le fameux jeu de course Forza Horizon 4 </p>
        <div class="container jeu">
          <div class="carousel carousel-slider center forza">
            <div class="carousel-fixed-item center">
            </div>
            <div class="carousel-item" href="#one!">
              <img src="img/forza.jpg" alt="La Castagne-Menu, Unity">
            </div>
            <div class="carousel-item" href="#two!">
              <img src="img/forza2.JPG" alt="La Castagne-Règles, Unity">

            </div>
            <div class="carousel-item" href="#three!">
              <img src="img/forza3.jpg" alt="La Castagne-1">

            </div>
            <div class="carousel-item" href="#four!">
              <img src="img/forza4.JPG" alt="La Castagne-2">
            </div>
          </div>
        </div>
        <br/>
       <br/>

       <p>Grace au travail de l'équipe le site été présenté dans le site officiel <br/> ainsi que les reseaux sociaux de Gaming Campus. <br/></p>
       <div class="container jeu">
         <div class="carousel carousel-slider center forza">
           <div class="carousel-fixed-item center">
           </div>
           <div class="carousel-item" href="#one!">
             <img src="img/forzagc.jpg" alt="La Castagne-Menu, Unity">
           </div>
           <div class="carousel-item" href="#two!">
             <img src="img/forzagc2.JPG" alt="La Castagne-Règles, Unity">

           </div>
           <div class="carousel-item" href="#three!">
             <img src="img/forzagc3.jpg" alt="La Castagne-1">

           </div>
         </div>
       </div>
       <br/>
      <br/>
    <?php
    $page="forza";
    require 'reviewform.php';
    ?>
    <div id="reviews">

    </div>
    <?php
    require 'footer.php';
    ?>
  </body>
</html>
