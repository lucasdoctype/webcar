<?php
    session_start(); 
  
    include_once("connect.php");    
  
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']); 
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5(mysqli_real_escape_string($conn, $_POST['senha']));
    
            
     
        $result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
       
        if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            $_SESSION['usuarioData'] = $resultado['created'];
            $_SESSION['usuarioTelefone'] = $resultado['telefone'];
            if($_SESSION['usuarioNiveisAcessoId'] == "1"){
                header("Location: administrativo.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                header("Location: colaborador.php");
            }else{
                header("Location: home_page.php");
            }
       
        }else{    
          
            $_SESSION['loginErro'] = "<h6 class='text-light bg-danger' style='border-radius:10%;'>Usuário ou senha Inválidos</h6>";
            header("Location: index.php");
        }
  
    }else{
        $_SESSION['loginErro'] = "<h6class='text-light bg-danger' style='border-radius:10%;'>Usuário ou senha Inválidos</h6>";
        header("Location: index.php");
    }
?>