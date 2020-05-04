<!DOCTYPE html>
<!-- saved from url=(0078)https://blackrockdigital.github.io/startbootstrap-modern-business/contact.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

      <!-- Font Awesome -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="imagens/logo.png">
    <title>WebCar</title>

    <!-- Bootstrap core CSS -->
    <link href="./contato_files/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./contato_files/modern-business.css" rel="stylesheet">
    
    <!-- Jquery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});
  
  
  
  
  </script>



  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="imagens/logo.png" style="width: 100px;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home_page.php" style="color: white;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.php" style="color: white;">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="servicos.php" style="color: white;">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: white;">Contato</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="https://blackrockdigital.github.io/startbootstrap-modern-business/#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                Cadastro
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="#">Cadastrar-se</a>
                <a class="dropdown-item" href="#">Cadastrar veículo(s)</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: white; margin-right: 25px;">Venda seu veículo</a>
            </li>
            <a class="btn btn-danger" href="#" role="button">Login</a>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contato
        <small></small>
      </h1>

      

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-1 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="./contato_files/maps.html"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Detalhes para contato:</h3>
          <p>
            Rua X, 99
            <br>Rio de Janeiro, RJ, (CEP)
            <br>
          </p>
          <p>
            <abbr title="Phone">Telefone</abbr>: (21) 4002-8922
          </p>
          <p>
            <abbr title="Email">E-mail</abbr>:
            <a href="mailto:name@example.com">webcar@example.com
            </a>
          </p>
          <p>
            <abbr title="Hours">Funcionamento:</abbr>: Segunda - Sábado: 9:00 às 17:00
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <hr>
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Envie-nos uma mensagem</h3>
          <form name="sentMessage" id="contactForm" novalidate="" style="margin-top:50px;">
            <div class="control-group form-group">
              <div class="controls">
                <label><i class="fas fa-address-card    "></i> Nome completo:</label>
                <input type="text" class="form-control" id="name" required="" data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label><i class="fas fa-phone    "></i> Telefone:</label>
                <input type="tel" class="form-control  phone_with_ddd" id="phone" required="" placeholder="(00) 0000-0000 ">
              <div class="help-block"></div></div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label><i class="fas fa-envelope    "></i> E-mail:</label>
                <input type="email" class="form-control" id="email" required="" placeholder="Insira seu melhor endereço de E-mail">
              <div class="help-block"></div></div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label><i class="fas fa-comment-alt    "></i> Mensagem:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required="" placeholder="Escreva a sua mensagem neste campo" maxlength="999" style="resize:none"></textarea>
              <div class="help-block"></div></div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-danger" id="sendMessageButton"><i class="fas fa-paper-plane    "></i> Enviar mensagem</button>
            <hr>
          </form>
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

</body>
</html>