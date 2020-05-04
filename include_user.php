<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <?php 
        include("connect.php");
        if (empty($_POST['email'])){
            header("Location:index.php");
        }else{
            $nome = trim($_POST['nome']);
            $sobrenome = trim($_POST['sobrenome']);
            $email = trim($_POST['email']);
            $telefone = trim($_POST['telefone']);
            $senha = trim($_POST['senha']);
            $senha = md5(trim($_POST['senha']));
            
            $sql = mysqli_query($conn , "SELECT * FROM usuarios WHERE email='$email' && senha='$senha'");
            $row = mysqli_num_rows($sql);
            if($row >= 1){
                echo "Usuario já cadastrado";
            }else{
                $sql = mysqli_query($conn , "INSERT INTO usuarios (nome,sobrenome,email,senha,telefone) VALUES ('$nome','$sobrenome','$email','$senha','$telefone')");
                
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                
                require 'vendor/autoload.php';
        
                $from = new SendGrid\Email(null, "webcar321@gmail.com");
                $subject = "Mensagem de contato";
                $to = new SendGrid\Email(null, $email);
                $content = new SendGrid\Content("text/html", "Prezado(a):"."<br/>".$nome."<br/>"."<br/>"."Parabéns pelo seu novo cadastro na Web Car em breve enviaremos um e-mail para autenticação de sua conta");
                $mail = new SendGrid\Mail($from, $subject, $to, $content);
                
                //Necessário inserir a chave
                $apiKey = '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';
                $sg = new \SendGrid($apiKey);
        
                $response = $sg->client->mail()->send()->post($mail);
                echo '<script>
                    alert("E-mail enviado com sucesso!!");
                    window.location = "loading.php";
                    </script>';


            }

        }
        
        ?>
        

    </body>
</html>
