<?php
/*
    Aplicación No 5 (Números en letras)
    Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
    por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
    entre el 20 y el 60.
    Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

    Alumno : Leandro Cabeza
    */

$numero = 43;

$primerDigito = (int)($numero/ 10);
$segundoDigito = $numero - ($primerDigito * 10);

if ($numero >= 20 && $numero <= 60) {
    switch ($primerDigito) {
        case 2:
            echo "Veinti ";
            break;
        case 3:
            echo "Treinta ";
            break;
        case 4:
            echo "Cuarenta ";
            break;
        case 5:
            echo "Cincuenta ";
            break;
        case 6:
            echo "Sesenta";
            break;
    }

    switch ($segundoDigito) {
        case 1:
            echo "y uno";
            break;
        case 2:
            echo "y dos";
            break;
        case 3:
            echo "y tres";
            break;
        case 4:
            echo "y cuatro";
            break;
        case 5:
            echo "y cinco";
            break;
        case 6:
            echo "y seis";
            break;
        case 7:
            echo "y siete";
            break;
        case 8:
            echo "y ocho";
            break;
        case 9:
            echo "y nueve";
            break;
        }
        }else{
            echo "El numero no esta entre el 20 y el 60";
        }
?>