<?php
    // Esto es un comentario de una linea
    # Esto también es un comentario

    /*
        Este es un bloque 
        de múlltiples líneas
    */

    // Variables    
    $nombre = "Juan";
    $edad = 20;

    echo $nombre; // Imprime: Juan

   //Constantes
    define("PI", 3.1416);
    const SALUDO = "Hola";
    echo "<br>" . PI; // Imprime: 3.1416
?>


<?php 
$frutas=["manzanas","banano","uva"];
echo $frutas[0]; //imprime:manzana
echo $frutas[2]; //imorime:uva
?>

<?php
$persona=[
    "nombre" => "ana",
    "edad" =>25,
    "ciudad" =>"bogota"
];

PHP
$a = 10;
$b = 3;
echo $a % $b; // Resultado: 1 (porque 3 cabe 3 veces en 10 y sobra 1)

Operadores Aritméticos y Asignación
PHP
<?php
$a = 10;
$b = 3;

echo $a + $b;  // 13
echo $a % $b;  // 1 (El residuo de 10 entre 3)
echo $a ** 2;  // 100 (10 al cuadrado)

// ASIGNACIÓN CON ATAJO
$puntos = 50;
$puntos += 10; // Ahora puntos vale 60 ($puntos = 50 + 10)

?>

Incremento y Decremento



PHP
<?php
$contador = 1;

$contador++; // Sube a 2
$contador++; // Sube a 3
$contador--; // Baja a 2

echo $contador; // Imprime: 2
?<
