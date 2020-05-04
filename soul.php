<?php
    session_start();
    include("auth.php");
?>
<!DOCTYPE html>
<!-- saved from url=(0066)https://blackrockdigital.github.io/startbootstrap-modern-business/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="imagens/logo.png">
    <title>WebCar</title>

    <!-- Bootstrap core CSS -->
    <link href="./Modern Business - Start Bootstrap Template_files/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_home_page.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Modern Business - Start Bootstrap Template_files/modern-business.css" rel="stylesheet">

      
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
  $('.phone_with_ddd').mask('(00) 00000-0000');
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
        <?php 
            include("menu.php");
        ?>
    <!-- Navigation -->
   

    <header>
      
    </header>

    <!-- Page Content -->
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="imagens/soul.png" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Kia Soul 2019</h2>
          <p>1.6 EX 16V FLEX 4P AUTOMÁTICO</p>
          <h2>R$85.000</h2>
        
          <p style="text-align: justify;">Entre os principais equipamentos do Soul 2018 estão freios ABS com EBD, airbags frontais, laterais e de cortina, ISOFIX, direção com assistência elétrica com coluna de direção regulável, ar condicionado automático digital, computador de bordo, conjunto elétrico (vidros, travas e retrovisores elétricos), DRL em LED, rodas de liga leve de 18”, bancos com revestimento em couro, e sistema multifunções com tela sensível ao toque de 8”, com pareamento via Bluetooth e espelhamento de smartphone via Google Android Auto e Apple CarPlay.</p>
        


        </div>
        
      </div>
      <!-- /.row -->

      <hr>
          <h2>Tenho interesse</h2>
          <form style="width: 360px;" action="processa.php" method="POST">
            <div class="row">
              <div class="col">
                <input type="text" name="nome" class="form-control" placeholder="Nome completo">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1"></label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
              <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu e-mail com mais ninguém.</small>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" name="telefone" class="form-control  phone_with_ddd" placeholder="(00) 00000-0000">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"></label>
              <textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="3" placeholder="Inisra sua mensagem aqui"></textarea>
            </div>
      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-4">
        <button type="submit" class="btn btn-danger" id="sendMessageButton"><i class="fas fa-paper-plane    "></i> Enviar mensagem</button>
            <hr>
        </div>
      </div>
    </div>
          </form>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="margin-top: 100px;">
      <div class="container">
        <p class="m-0 text-center text-white">TODOS OS DIREITOS RESERVADOS © WebCar 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    
  


</body></html>