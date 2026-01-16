<?php
//Procesa el login//
?>

<?php
session_start();
include "conesion.php";

$usuario =$_POST["usuario"] ?? "";
$clave = $_POST["clave"] ?? "";

if(
    $usuario == "" || $clave === ""){
        header("location: login.php?msg=" .
        urlencode("complete todos los campos"));
        exit;

}

$spl = "SELECT id, usuario FROM usuarios where usuario='$usuario' 
AND clave='$clave' LIMIT 1";
$res = $conn->query($sql);

if($res &&  $res->num_rows === 1){
    $fila = $res->fetch_assoc();
    $_SESSION["usuario"] = $fila["usuario"];
    $_SESSION["id_usuario"] = $fila["id"];

    header("location: dashboard.php");
    exit;
    
}

header("location: login.php?msg=". urlencode("Usuario o clave incorrectos"));
exit;


?>