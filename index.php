<?php
	session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<title>WBCAR&reg;</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="imagens/logo.jpg" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css" />

	<link href="css/hover.css" rel="stylesheet" media="all">
</head>

<body class="fadeIn">
	<div class="background-wrap">
		<video class="video-background" autoplay="true" muted="muted" loop="loop" preload="auto">
			<source src="video/background.mp4" type="video/mp4">
		</video>
	</div>
	<div class="content">
		<div class="container h-100">
			<div class="d-flex justify-content-center h-100">
				<div class="user_card">
					<div class="d-flex justify-content-center">
						<div class="brand_logo_container">
							<img src="imagens/logo.jpg" class="brand_logo" alt="Logo">
						</div>
					</div>
					<div class="d-flex justify-content-center form_container">
						<form action="valida.php" method="POST" enctype="multipart/form-data">

							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fas fa-envelope    "></i>
									</span>
								</div>
								<input type="email" name="email" class="form-control input_user " required value="" placeholder="Insira seu e-mail..">

							</div>

							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fas fa-key    "></i>
									</span>
								</div>
								<input type="password" name="senha" class="form-control input_pass" value="" required placeholder="Insira sua senha..">

							</div>

					</div>
					<div class="d-flex justify-content-center mt-3 login_container">
						<button type="submit" name="button" class="btn btn-outline-light btn-block hvr-buzz">
							<i class="fa fa-car" aria-hidden="true"></i> LOGAR</button>
					</div>
					<div class="d-flex justify-content-center mt-3 login_container">
						<a href="cad_user.php" type="" name="button" class="btn btn-outline-light btn-block hvr-pulse-grow">
							<i class="fa fa-keyboard-o" aria-hidden="true"></i> CADASTRAR-SE</a>
					</div>
					<div class="mt-4">
						<div class="d-flex justify-content-center links">
							<p>
								<?php 
			
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
							</p>
							<p>
								<?php 
			
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
							</p>
						</div>
						<div class="d-flex justify-content-center links">
							<h6 class="text-light" style="text-decoration:underline;">Todos os direitos reservados &reg;</h6>


						</div>
					</div>
				</div>
			</div>
		</div>
		
			<div class="col text-center " style="margin-top:10px;">
				<img src="imagens/uber_logo.png" class="hvr-float" height="80" style="opacity:0.8;" alt="99_logo">
				<img src="imagens/itau_logo.png" class="hvr-buzz"  height="50" style="opacity:0.8;" alt="99_logo">
				<img src="imagens/visa_logo.png" class="hvr-bounce-in" height="80" style="opacity:0.8;"  alt="99_logo">
				<img src="imagens/logo_cabify.png" class="hvr-grow-rotate" height="50" style="opacity:0.8;" alt="99_logo">
			</div>
		
	</div>
	</form>
	 



</body>

</html>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
 crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
 crossorigin="anonymous"></script>