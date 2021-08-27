<?php
/*
        Aplicación No 7 (Mostrar impares)
    Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
    Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
    salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
    las estructuras while y foreach.

    Alumno : Cabeza Leandro
*/

$cantidadImpares = 0 ;
$array;

while ($cantidadImpares !=10){
    $auxiliar = rand(1,100);

    if ($auxiliar%2){
        $array[]= $auxiliar;
        $cantidadImpares++;
    }
}

echo "Valores de los primeros 10 Numeros impares con For <br> ";

    for ($i=0; $i < 10; $i++) { 
        echo "Usando el for :".$array[$i]."<br>";
    }

echo "Valores de los primeros 10 Numeros impares con Foreach <br> ";
foreach ($array as $a) {
    echo "Usando Foreach :".$a."<br>";
}

echo "Valores de los primeros 10 Numeros impares con While <br> ";

    $b = 0 ;
    while ($b < 10) {
        echo "Usando el while : ".$array[$b]."<br>";
        $b++;
    }
