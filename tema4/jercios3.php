<?php
$dias = [
    "lunes" => "Lu",
    "martes" => "Ma",
    "miercoles" => "Mi",
    "jueves" => "Ju",
    "viernes" => "Vi",
    "sabado" => "Sa",
    "domingo" => "Do"
];

// Obtener claves
$claves = array_keys($dias);

// Recorrer con for
for ($i = 0; $i < count($claves); $i++) {
    $clave = $claves[$i];
    echo $dias[$clave] . "<br>";
}
?>