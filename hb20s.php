<?php
    session_start();
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
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
   <?php 
      include("menu.php");
   ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="imagens/hb20s.png" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Hyundai Hb20s 2019</h2>
          <p>1.0 COMFORT PLUS 12V FLEX 4P MANUAL</p>
          <h2>R$50.000</h2>
        
          <p style="text-align: justify;">Entre os principais equipamentos do HB20S 2019, já na versão Comfort Plus, estão airbags frontais, ISOFIX, direção com assistência hidráulica, ar condicionado, sistema de áudio blueAudio, com USB, AUX-in e Bluetooth com comandos no volante, regulagem de altura do banco do motorista, rodas de aço de 15” com calotas integrais, vidros elétricos dianteiros, travas elétricas, e computador de bordo. Para a nova versão Copa do Mundo FIFA, acrescenta-se bancos com revestimento parcial em couro, sistema multimídia blueMedia, com tela de 7” sensível ao toque, USB e AUX-In, Bluetooth com streaming e espelhamento de smartphones via Apple Carplay e Google Android Auto e TV digital integrada, e rodas de liga leve de 15” com design e pintura exclusivos. Para a série 1 Million, adiciona-se bancos com revestimento em couro bege e brasão na lateral. Na versão Premium, topo de linha, inclui-se airbags laterais, ar condicionado automático digital, alarme, faróis e lanternas de neblina, sensor de estacionamento, rodas de liga leve com design exclusivo da versão, e detalhes externos cromados, além da opção de revestimento dos bancos em couro.</p>
        


        </div>
        
      </div>
      <!-- /.row -->

      <hr>
          <h2>Tenho interesse</h2>
          <form style="width: 360px;">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nome completo">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1"></label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
              <small id="emailHelp" class="form-text text-muted blockquote-footer">Nós nunca compartilharemos seu e-mail com mais ninguém.</small>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control  phone_with_ddd" placeholder="(00) 0000-0000">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"></label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Olá, tenho interesse no veículo. Por favor entre em contato.</textarea>
            </div>
            <!-- Call to Action Section -->
            <div class="row mb-4">
              <div class="col-md-4">
                  <button class="btn btn-danger" type="submit"><i class="fas fa-paper-plane    "></i> Enviar Mensagem</button>    
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
  


</body>
</html>