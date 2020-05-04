


<?php
        include("connect.php");
        session_start();

        $id = $_POST['id'];

        $sql = mysqli_query($conn,"SELECT * FROM usuarios WHERE id='$id'");
        $row = mysqli_num_rows($sql);
        

        
?>
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
<?php while ($dados = mysqli_fetch_array($sql)) { ?>       
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
                                <h3 class="register-heading">Editar Perfil</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="" class="form-text">Nome*</label>
                                            <input type="text" class="form-control" name="nome"  value="<?php echo $dados['nome']?>" />
                                        </div>
                                        <div class="form-group">
                                        <label for="" class="form-text">Sobrenome*</label>
                                            <input type="text" class="form-control" name="sobrenome"  value="<?php echo $dados['sobrenome']?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-text">Senha*</label>
                                            <input type="password" class="form-control" name="senha"  placeholder="*******" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="" class="form-text">Email*</label>
                                            <input type="email" class="form-control" name="email"  value="<?php echo $dados['email']?>" />
                                        </div>
                                        <div class="form-group">
                                        <label for="" class="form-text"><Telefone></Telefone></label>
                                        <label for="" class="form-text">Telefone*</label>   
                                            <input type="text" minlength="10" maxlength="10" name="telefone" class="form-control phone_with_ddd" value="<?php echo $dados['telefone']?>" value="" />
                                        </div>

                                        <button type="submit" class="btn btn-info btn-block" />Atualizar Dados <i class="fas fa-check    "></i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        <?php }?>
</body>
</html>
