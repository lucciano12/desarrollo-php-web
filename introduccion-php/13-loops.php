<?php include 'includes/header.php';
                              
// While
$i = 0;

while($i < 10) {
    echo $i . "<br>";
    $i++;
}

echo "<br>";

// Do While
$i = 100;

do {
    echo $i . "<br>";
    $i++;
} while($i < 10);

// For Each
$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente ):
    echo $cliente . '<br/>';
endforeach;

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach( $cliente as $key => $valor ):
    echo $key . " - " . $valor . '<br/>';
endforeach;

include 'includes/footer.php';