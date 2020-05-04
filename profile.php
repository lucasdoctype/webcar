<?php  
    session_start();
    include("connect.php");

    if (!isset($_SESSION['usuarioEmail'])) {
        header("Location:index.php");
    
    }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style_home_page.css" />
<link rel="stylesheet" href="css/profile_css.css" />
<meta charset="utf-8" />
<!------ Include the above in your HEAD tag ---------->
<?php 
        include("menu.php");    
?>
<div class="container emp-profile" style="margin-top:150px;">
            <form method="post" action="teste.php">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h6>
                                       Portal do Colaborador
                                    </h6>
                                    <p class="proile-rating">Data de Registro : <span>
                                    <?php
                                    echo "<p>".$_SESSION['usuarioData']."</p>";	
                                                ?>
                                    
                                        </span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-info">Editar Perfil <i class="fas fa-edit    "></i> </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-white ">
                        
                    </div>
                    <div class="col-md-4">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nome:</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                    echo "<p>".$_SESSION['usuarioNome']."</p>";
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                    echo "<p>".$_SESSION['usuarioEmail']."</p>";	
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                    echo "<p>".$_SESSION['usuarioTelefone']."</p>";	
                                                ?>
                                            </div>
                                        </div>

                                    <input type="hidden" name="id" value="<?php echo $_SESSION['usuarioId'] ?>">
                                        
            </form>           
        </div>