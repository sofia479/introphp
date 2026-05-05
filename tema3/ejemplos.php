<?php
function saludar() {
    echo "Hola, bienvenido a PHP";
}

saludar(); // Llamado de la función
?>

<?php
function saludar($nombre) {
    echo "Hola, " . $nombre;
}

saludar("sofia");
?>

<?php
function sumar($a, $b) {
    $resultado = $a + $b;
    echo "La suma es: " . $resultado;
}

sumar(5, 3);
?>

<?php
function multiplicar($a, $b) {
    return $a * $b;
}

$resultado = multiplicar(4, 5);
echo "Resultado: " . $resultado;
?>


