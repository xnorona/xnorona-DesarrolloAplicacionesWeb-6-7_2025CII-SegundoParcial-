<?php
// codigo php va aqui

//imprimir informacion 
echo "hola mundo";
echo "<h1>hola desde php</h1>";
echo "<p>esto genera el servidor</p>";

//variables
//todas las variables inician con signo $
$nombre ="xavier";
$edad = 29;
$ativo = true;
$decimal = 3.14; //float
$nulo = null; //null

echo $nombre;
echo "<br>"; //salto de linea
echo $edad;
var_dump($nombre);
echo "<br>";

//concatenacion de strings 
echo "hola" . $nombre;
echo "<br>";

//operadores basicos 
$suma = 5+2;
$resta = 5-4;
$multi = 5*8;
$div = 2/4;

//operadores de comparacion
$a = 5;
$b = 4;
$a == $b; //igual valor 
$a === $b; //igual valor y tipo 

//estructura condicional
$edad = 20;
if ($edad >= 18){
    echo "mayor de edad";
} else {
    echo " menor de edad";
}
echo "<br>";

// if / elseif / else 

$nota = 8;
if ($nota >= 9 ){
    echo "exelente";
}elseif ($nota >= 7){
    echo "aprobado";
}else{
    echo "reporbado"; 
}
echo "<br>";

//estructura repetitivas 
//while
$i = 0;
while ($i < 5 ){
    echo $i . "<br>";
    $i++;
}
echo "<br>";

//for 
for ($i = 0; $i < 5; $i++){
    echo "numero: $i++ <br>";
}

//arreglo en php 
//array indexado
$colores = ["rojo", "azul", "amarillo"];
echo $colores[0];
echo "<br>";

















?>


