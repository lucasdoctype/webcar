<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		$telefone = $_POST['telefone'];
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, $email);
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "webcar321@gmail.com");
        $content = new SendGrid\Content("text/html", "Cliente: ".$nome."."." <br><br>Nova mensagem de contato:<br><br>Nome: $nome<br>Email: $email <br>Telefone: $telefone<br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo '<script>
            alert("E-mail enviado com sucesso!!");
            window.location = "home_page.php";
            </script>';
		
        ?>
    </body>
</html>
