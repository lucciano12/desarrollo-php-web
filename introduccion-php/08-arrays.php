<?php include 'includes/header.php';


$carrito = ['Tablet', 'Television', 'Computadora'];

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Aceder a un elemento del array
echo $carrito[1];

//Añadir elementos al array
$carrito[3] = 'Audifonos';

//Añadir elementos al array al final
array_push($carrito, 'celular');

//Añadir al inicio del array
array_unshift($carrito, 'Reloj');


echo "<pre>";
var_dump($carrito);
echo "</pre>";

$cliente = array('cliente 1', 'cliente 2', 'cliente 3');
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';