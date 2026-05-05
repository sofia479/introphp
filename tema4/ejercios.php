
<?php
// tiempo de duracion en minutos (puede cambiar este valor)
$duracion=5;
$costototal=0;

if ($duracion<=3) {
// si dura 3 minutos o menos el costo es fijo 
$costototal=300;
} else {
    // si dura mas 3 minutos,se suman los adicionales 
    $minutosadicionales = $duracion -3;
    $costototal =300 + ($minutosadicionales* 50);}

echo "la duracion de la llamada fue de".$duracion."minutos.<br>";
echo "el costo total es pagar es: $". $costototal;
?>

