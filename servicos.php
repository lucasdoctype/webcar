<?php 
    session_start();
    include ("auth.php");
?>

<!DOCTYPE html>
<!-- saved from url=(0079)https://blackrockdigital.github.io/startbootstrap-modern-business/services.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="imagens/logo.png">
    <title>WebCar</title>

    <!-- Bootstrap core CSS -->
    <link href="./serviços_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./serviços_files/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style_home_page.css" />
  </head>

  <body>

    <!-- Navigation -->
    <?php
        include("menu.php");
    ?>

    <!-- Page Content -->
    <div class="container" style="margin-top:100px;">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Nossos serviços:
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="template.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Serviços</li>
      </ol>

      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="imagens/servicos.png" alt="" style="width: 1150px; height: 300px;">

      <h2 class="mt-4 mb-3">Preços promocionais por tempo limitado!
        <small></small>
      </h2>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Manutenção adicional</h4>
            <div class="card-body">
              <img src="imagens/servico.png" style="width: 307.5px; height: 200px;">
            </div>
            <div class="card-footer">
              <p class="card-text">Manutenção feita gratuitamente na compra de qualquer veículo em nossa loja!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Manutenção extra</h4>
            <div class="card-body">
              <img src="imagens/servico2.png" style="width: 307.5px; height: 200px; margin-bottom: 15px;">
              A partir de R$110.49!
            </div>
            <div class="card-footer">
              <a href="extra.php" class="btn btn-danger">Mais detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Pintura</h4>
            <div class="card-body">
              <img src="imagens/servico3.png" style="width: 307.5px; height: 200px; margin-bottom: 15px;">
              A partir de R$110.49!
            </div>
            <div class="card-footer">
              <a href="pintura.php" class="btn btn-danger">Mais detalhes</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 10px;">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Lanternagem</h4>
            <div class="card-body">
              <img src="imagens/servico4.png" style="width: 307.5px; height: 200px; margin-bottom: 15px;">
              Preço/Hora - R$150,00
            </div>
            <div class="card-footer">
              <button class="btn btn-danger">Entrar em contato</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Insulfilm</h4>
            <div class="card-body">
              <img src="imagens/servico5.png" style="width: 307.5px; height: 200px; margin-bottom: 15px;">
              A partir de R$110.49!
            </div>
            <div class="card-footer">
              <a href="insulfilm.php" class="btn btn-danger">Mais detalhes</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Acessórios extras</h4>
            <div class="card-body">
              <img src="imagens/servico6.png" style="width: 307.5px; height: 200px; margin-bottom: 15px;">
              A partir de R$110.49!
            </div>
            <div class="card-footer">
              <a href="acessorios.php" class="btn btn-danger">Mais detalhes</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

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
    <script src="./serviços_files/jquery.min.js.download"></script>
    <script src="./serviços_files/bootstrap.bundle.min.js.download"></script>

  


</body></html>