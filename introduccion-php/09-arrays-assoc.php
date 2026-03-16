<?php
 include 'includes/header.php';

//Arreglo asociativo = Objetos en JS

$cliente =[
  'nombre' => 'Juan',
  'saldo' => 200,
  'informacion' => [
    'tipo' => 'Premium',
    'disponible' => 500
  ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

$cliente['codigo'] = 12345;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';