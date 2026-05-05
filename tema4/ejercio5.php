<?php
function calcular($numero) {
    $cuadrado = pow($numero, 2);
    $cubo = pow($numero, 3);
    $raiz = sqrt($numero);

    return [
        "cuadrado" => $cuadrado,
        "cubo" => $cubo,
        "raiz" => $raiz
    ];
}

// Ejemplo de uso
$resultado = calcular(4);

echo "Cuadrado: " . $resultado["cuadrado"] . "<br>";
echo "Cubo: " . $resultado["cubo"] . "<br>";
echo "Raíz: " . $resultado["raiz"] . "<br>";
?>