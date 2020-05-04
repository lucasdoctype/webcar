<?php
    include("connect.php");

 if (!isset($_SESSION['usuarioEmail'])) {
    header("Location:index.php");
 }
?>