<?php
/*Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.

Alumno: Leandro Cabeza
*/

$fechaActual = date("d/m/y");
$mes = (int)date("m");
$dia = (int)date("d");



echo "La fecha actual del servidor es : " . $fechaActual . "<br>";

if ($mes >= 9  && $mes <= 12) {
    echo "Es Primavera";
} else if ($mes >= 3 && $mes <= 6) {
    echo "Es Otoño";
} else if ($mes >= 6 && $mes <= 9) {
    echo "Es Invierno";
} else {
    echo "Es Verano";
}

