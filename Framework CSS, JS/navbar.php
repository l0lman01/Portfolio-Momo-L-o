<meta charset="utf-8">
<link rel="stylesheet" href="css/materialize.min.css">
<link id='darkstyle' rel="stylesheet" type="text/css" href="css/dark.css?v=1">
<link id='lightstyle' rel="stylesheet" type="text/css" href="css/light.css?v=1" disabled>

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>
<!-- Navbar PC -->
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"> <img id='gc' src="img/Logo GC.png" alt="" style="width:70%"> </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="aboutUs.php">ABOUT US</a></li>
        <li><a class='dropdown-trigger drptrig' href="#" data-target='Projet1'>PROJECTS</a></li>
        <li><a class="modal-trigger" href="#modal1">CONTACT</a></li>
      </ul>
    </div>
  </nav>
<p class="btn" onclick="ChangeMode()" name="button"> <img id='lamp' src='img/lamp.png' alt='' style='width:40%'> </p>
</div>
<!-- Modal Trigger -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
    <h4>CONTACT US</h4>
    <div class="contc">
      <div class="row">
      <form class="col s6 offset-s3">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="message" class="materialize-textarea"></textarea>
            <label for="text">Message</label>
          </div>
        </div>
        </div>
      <div class="input-field col s12">
        <div class="container but">
          <p  class="btn waves-effect waves-light<?php echo $btnclr ?>" onclick="sendContact()" name="action">
            Submit
            <i class="material-icons right">send</i>
          </p>
        </div>
      </div>
      </form>
    </div>
    </div>
</div>

<!-- Dropdown Structure -->
<ul id='Projet1' class='dropdown-content'>
<li><a href="forza.php">FH4 Website</a></li>
<li><a href="castagne.php">La Castagne</a></li>
<li><a href="oie.php">Jeu de l'Oie</a></li>
</ul>


<!-- Navebar Mobile -->
<ul class="sidenav" id="mobile-demo">
  <li><a href="aboutUs.php" class="nonprojet">ABOUT US</a></li>
  <li><a href="forza.php" class="projet">FH4 Website</a></li>
  <li><a href="castagne.php" class="projet">La Castagne</a></li>
  <li><a href="oie.php" class="projet">Jeu de l'oie</a></li>
  <li><a class="modal-trigger nonprojet" href="#modal1">CONTACT</a></li>
</ul>
