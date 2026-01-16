<?php
//Punto de entrada//
?>

<?php
session_start();

if(isset($_SESSION["usuario"])){
    header("location: dashboard.php");
    exit;
}


?>