<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Projet Framework CSS/JSS</title>
    <?php
    require 'navbar.php';
    ?>
    <div class="row">
        <div class="col s12 tabb">
          <ul class="tabs">
            <li class="tab col s4"><a href="#test1" style=" color:#a3f235 ">Mohamed Kharrat</a></li>
            <li class="tab col s4"><a href="#test2" style=" color:#a3f235 ">Léo Pham-Vu</a></li>
            <li class="tab col s4"><a href="#test3" style=" color:#a3f235 ">Dédicaces</a></li>
          </ul>
        </div>
        <div id="test1" class="col s12">
          <h2>Mohamed Kharrat</h2>
          <img src="img/Momo.jpg" class="profile" alt="">
<p>Mohamed est un étudiant de G.Tech 1,<br> Ancien étudiant à l'EPFL. <br>il a 20 ans et il a travaillé sur pas mal  <br> de projets, en équipe et solo, <br>qui se focalisent essentiellement sur les jeux vidéos. </p>
        </div>

        <div id="test2" class="col s12" >
          <h2>Léo Pham-Vu</h2>
          <img src="img/Leo.jpg" alt="" class="profile">
          <p>Léo a 19 ans, est un étudiant G.Tech. <br> Passionné de jeux-vidéos, Il voudrait devenir programmeur <br> de jeux-vidéo depuis ses 15 ans  quand il a touché  <br> pour la 1ère fois une ligne de code.</p>
        </div>

        <div id="test3" class="col s12">
          <h2>Dédicaces</h2>

          <h3>Hugo Vincens<i class="material-icons">person</i></h3>
          <p>qui a participé au projet La Castagne</p>    </br>

          <h3>Eliot Cros<i class="material-icons">person</i></h3>
        <p>qui a participé au projet La Castagne et le Jeu de l'oie</p>      </br>

          <h3>Samuel Hermabessiere (GBS)<i class="material-icons">person</i></h3></i>
        <p>qui a participé au projet Forza Horizon 4</p>        </br>

          <h3>Marwan Adourkane (GArt)<i class="material-icons">person</i></h3>
          <p>qui a participé au projet Forza Horizon 4</p>
        </div>
    </div>
  <?php
  $page = "aboutus";
  require 'footer.php';
  ?>
  </body>
</html>
