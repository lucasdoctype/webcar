<?php
        session_start();
        include("connect.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_home_page.css"/>

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
  <?php 
        include("menu.php");
   ?>
        

    <div class="container" style="margin-top:200px;">
            <h4>Fale conosco</h4>
            <hr>
    
  <form name="sentMessage" action="processa.php" method="POST" id="contactForm" novalidate="" style="margin-top:50px;">
            <div class="control-group form-group">
              <div class="controls">
                <label><i class="fas fa-address-card    "></i> Nome completo:</label>
                <input type="text" class="form-control"  name="nome" id="name"  placeholder="Insira seu nome neste campo">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label><i class="fas fa-phone    "></i> Telefone:</label>
                <input type="tel" name="telefone"  class="form-control  phone_with_ddd" id="phone"  placeholder="(00) 00000-0000 ">
              <div class="help-block"></div></div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label><i class="fas fa-envelope    "></i> E-mail:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu melhor endereço de E-mail">
              <div class="help-block"></div></div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label><i class="fas fa-comment-alt    "></i> Mensagem:</label>
                <textarea rows="10" cols="100" class="form-control"  name="mensagem" id="message"  placeholder="Escreva a sua mensagem neste campo" maxlength="999" style="resize:none"></textarea>
              <div class="help-block"></div></div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-danger" id="sendMessageButton"><i class="fas fa-paper-plane    "></i> Enviar mensagem</button>
            <hr>
          </form>  
          </div>
  </body>
</html>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>