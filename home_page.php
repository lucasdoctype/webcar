
<?php
	session_start();
  include("connect.php");
  include ("auth.php");
?>
<!DOCTYPE html>
<!-- saved from url=(0066)https://blackrockdigital.github.io/startbootstrap-modern-business/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="imagens/logo.png">

    <title>WebCar</title>

    <!-- Bootstrap core CSS -->
    <link href="./Modern Business - Start Bootstrap Template_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Modern Business - Start Bootstrap Template_files/modern-business.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style_home_page.css">
    <link href="css/hover.css" rel="stylesheet" media="all">
    <link href="css/style.css" rel="stylesheet" media="all">


  </head>

  <body class="fadeIn">

<!-- Nav -->

<?php
        include("menu.php");
    ?>
<!-- Nav -->

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url(imagens/banner4.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <a href="sonata.php"><h3 style="color: white;">Hyundai Sonata 2018</h3>
              <p style="color: white;">O mais novo lançamento da WebCar!</p></a>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(imagens/banner2.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3>Hyundai Sonata 2018</h3>
              <p>O mais novo lançamento da WebCar!</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(imagens/banner7.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3>Hyundai Sonata 2018</h3>
              <p>O mais novo lançamento da WebCar!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Últimos lançamentos:</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Hyundai Hb20s</h4>
            <div class="card-body">
              <img src="imagens/hb20s.png" style="width: 300px; height: 200px;">
              <h5>A partir de R$50.000!</h5>
            </div>
            <div class="card-footer">
              <a href="hb20s.php" class="btn btn-danger hvr-buzz-out">Detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Kia Soul</h4>
            <div class="card-body">
              <img src="imagens/soul.png" style="width: 300px; height: 200px;">
              <h5>A partir de R$85.000!</h5>
            </div>
            <div class="card-footer">
              <a href="soul.php" class="btn btn-danger hvr-buzz-out">Detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Chevrolet Cobalt</h4>
            <div class="card-body">
              <img src="imagens/cobalt.png" style="width: 300px; height: 200px;">
              <h5>A partir de R$55.000!</h5>
            </div>
            <div class="card-footer">
              <a href="cobalt.php" class="btn btn-danger hvr-buzz-out">Detalhes</a>
            </div>
          </div>
        </div>

        <div class="container">

        <h1 class="my-4">Destaques:</h1>

        <div class="row">
          <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Chevrolet Onix</h4>
            <div class="card-body">
              <img src="imagens/onix.png" style="width: 300px; height: 200px;">
              <h5>A partir de R$40.000!</h5>
            </div>
            <div class="card-footer">
              <a href="onix.php" class="btn btn-danger hvr-buzz-out">Detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Fiat Argo</h4>
            <div class="card-body">
              <img src="imagens/argo.png" style="width: 300px; height: 200px;">
              <h5>A partir de R$40.000!</h5>
            </div>
            <div class="card-footer">
              <a href="argo.php" class="btn btn-danger hvr-buzz-out">Detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Volkswagen Virtus</h4>
            <div class="card-body">
              <img src="imagens/virtus.png" style="width: 300px; height: 200px;">
              <h5>A partir de R$55.000!</h5>
            </div>
            <div class="card-footer">
              <a href="virtus.php" class="btn btn-danger hvr-buzz-out">Detalhes</a>
            </div>
          </div>
        </div>
        </div>

        </div>

      </div>

      <!-- Portfolio Section -->
      <h2 style="margin-top: 10px; margin-bottom: 25px;">Nossas Marcas:</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="peugeot.php"><img class="card-img-top hvr-grow" src="imagens/peugeot.png" alt="" style="width: 225px; height: 225px; margin-left: 70px;"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="peugeot.php" class="text-dark ">Peugeot</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="fiat.php"><img class="card-img-top hvr-grow" src="imagens/fiat.png" alt="" style="width: 225px; height: 225px; margin-left: 60px;"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="fiat.php" class="text-dark ">Fiat</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="renault.php"><img class="card-img-top hvr-grow" src="imagens/renault.png" alt="" style="width: 225px; height: 225px; margin-left: 60px;"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="renault.php" class="text-dark ">Renault</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top hvr-grow" src="imagens/ford.png" alt="" style="width: 225px; height: 225px; margin-left: 60px;"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="text-dark ">Ford</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top hvr-grow" src="imagens/hyundai.png" alt="" style="width: 225px; height: 225px; margin-left: 60px;"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"class="text-dark ">Hyundai</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top hvr-grow" src="imagens/toyota.png" alt="" style="width: 225px; height: 225px; margin-left: 60px;"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="text-dark ">Toyota</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        
        
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="margin-top: 100px;">
      <div class="container">
        <p class="m-0 text-center text-white">TODOS OS DIREITOS RESERVADOS © WebCar 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="./Modern Business - Start Bootstrap Template_files/jquery.min.js.download"></script>
    <script src="./Modern Business - Start Bootstrap Template_files/bootstrap.bundle.min.js.download"></script>

  


</body></html>