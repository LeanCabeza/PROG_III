<?php

/*
    Aplicación No 6 (Carga aleatoria)
    Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
    función rand). Mediante una estructura condicional, determinar si el promedio de los números
    son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
    resultado.
    Alumno : Cabeza Leandro Ivan
*/

$array = array(5);
$acumulador = 0 ; 

$array[0] = rand($min=0,$max=10);
$array[1] = rand($min=0,$max=10);
$array[2] = rand($min=0,$max=10);
$array[3] = rand($min=0,$max=10);
$array[4] = rand($min=0,$max=10);

foreach ($array as $a){
    echo "Valor de A: ".$a."<br>";
    $acumulador = (int)($a+$acumulador);
}

echo "Total:".$acumulador."<br>";

if(($acumulador/6)>6){
    echo "El promedio de los numeros es mayor a 6";
}else if (($acumulador/6)<6){
    echo "El promedio de los numeros es menor a 6";
}else{
    echo "El promedio de los numeros es 6";
}

?>