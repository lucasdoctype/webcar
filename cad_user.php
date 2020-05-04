<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style_cad_user.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/hover.css" />

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

<!------ Include the above in your HEAD tag ---------->




<html>

<body class="fadeIn">
    

<form action="include_user.php" method="POST">

<div class="container register" style="margin-top:150px;">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="imagens/logo.jpg" alt=""/>
                        <h2>Bem-vindo!</h2>
                        <p>Preencha todos os campos com seus dados</p>
                        <br/>
                        <small class="form-text text-muted blockquote-footer">Todos os Direitos Reservados &reg;</small>
                        
                    </div>
                    <div class="col-md-9 register-right">
                      
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Inscreva-se </h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nome" placeholder="Nome *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" required id="password" name="senha" placeholder="Senha *" value="" />
                                            <input type="checkbox" onclick="myFunction()">Exibir Senha.
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="senha" required id="confirm_password"  placeholder="Confirme sua Senha *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Seu email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="telefone" class="form-control phone_with_ddd" placeholder="Telefone Celular *" value="" />
                                        </div>
                                        <input type="submit" class="btn btn-info btn-block"  value="Inscrever-se"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

            <script>
                        var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
            </script>


            <script>
            
            function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
            </script>
</body>
</html>
