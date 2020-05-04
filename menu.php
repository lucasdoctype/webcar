
<?php
    include("connect.php");

 if (!isset($_SESSION['usuarioEmail'])) {
    header("Location:index.php");
 }
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<link href="css/hover.css" rel="stylesheet" media="all">
<script src="./Modern Business - Start Bootstrap Template_files/bootstrap.bundle.min.js.download"></script>
<link href="css/style.css" rel="stylesheet" media="all">

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" style="border-bottom: 5px  solid #f009 ;">
      <div class="container">
      <img src="imagens/logo.jpg" style="margin-right:20px;border-radius:20px 0px 0px 0px;"  height="80" style="opacity:0.8;" alt="99_logo">
          <?php
	          echo "<h4 class='text-light' style='margin-right:10px;'>Bem-Vindo:</h4>"." <h4 class='text-light'>" .$_SESSION['usuarioNome']."</h4>";	
          ?>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link hvr-float" href="home_page.php" style="color: white;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-float" href="sobre.php" style="color: white;">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-float" href="servicos.php" style="color: white;">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-float" href="contact.php" style="color: white;">Contato</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link hvr-float dropdown-toggle" href="https://blackrockdigital.github.io/startbootstrap-modern-business/#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                Cadastro
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item hvr-sweep-to-right" href="#"><i class="fa fa-car" aria-hidden="true"></i> Meus Carros </a>
                <a class="dropdown-item hvr-sweep-to-right" href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a>
              </div>
            </li>
            
            <a class="btn btn-danger" href="sair.php" role="button"><i class="fas fa-door-open    "></i> Logoff</a>
            
          </ul>
        </div>
      </div>
    </nav>