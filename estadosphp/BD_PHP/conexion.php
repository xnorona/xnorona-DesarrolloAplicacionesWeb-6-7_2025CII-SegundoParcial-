<?php
//conectar PHP con MYSQL//
?>

<?php
$host = "localhost";
$bd = "web_app67";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $bd);

if($conn->connect_error){
    die("Error de conexion: . $conn->connect_error");
}

$conn->set_charset("utf8mb4");

?>