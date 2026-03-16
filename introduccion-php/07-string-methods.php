<?php include 'includes/header.php';

$nombreCliente = "Juan Pablo";

//Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

echo "<br>";

//Convertir a mayusculas
echo strtoupper($nombreCliente);

echo "<br>";

//convertir a minusculas
echo strtolower($nombreCliente);

echo "<br>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump($mail1 == $mail2);
var_dump(strtolower($mail1) == strtolower($mail2));

echo "<br>";

//Remplazar una letra
echo str_replace('Juan', 'J', $nombreCliente);

echo "<br>";

//Revisar si un string existe
echo strpos($nombreCliente, 'u');

echo "<br>";

//Concatenar strings
$tipoCliente = "Premium";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente; 

echo "<br>";

echo "El cliente $nombreCliente es $tipoCliente";

include 'includes/footer.php';
