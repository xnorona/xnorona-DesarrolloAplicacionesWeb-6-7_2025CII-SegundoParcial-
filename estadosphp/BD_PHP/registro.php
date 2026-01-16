<?php
//Registro de usuario//
?>

<?php
session_start();
include "conexion.php";

$msg = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $usuario = $_POST["usuario"] ?? "";
    $correo = $_POST["correo"] ?? "";
    $clave = $_POST["clave"] ?? "";

    
    if($usuario === "" || $correo === "" || $clave === ""){
        $msg = "Complete todos los campos";

    }else{
        $sql_check = "SELECT id FROM usuarios WHERE usuario='$usuario' LIMIT 1";
        $check = $conn->query($sql_check);

        if ($check && $check->num_rows > 0){
            $msg = "Ese usuario ya existe. intente otro";
        } else {
            $sql = "INSERT INTO usuarios (usuario,correo,clave) VALUES ('$usuario','$correo','$clave')";
            
            if($conn->query($sql)){
                
                header("Location: login.php?msg=".urlencode("Registro exitoso. inicie sesion"));
                exit;
            }else{
                $msg = "Error al registrar";
            }
        }
    } 
} 

?>