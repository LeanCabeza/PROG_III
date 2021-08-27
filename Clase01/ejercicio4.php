<?php
/*
    Aplicación No 4 (Calculadora)
    Escribir un programa que use la variable $operador que pueda almacenar los símbolos
    matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
    símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
    resultado por pantalla.

    Alumno : Cabeza Leandro
*/
$operador = "+";
$num1 = 15;
$num2 = 15;
$resultado = 0;

switch ($operador) {
    case '+':
        $res = $num1 + $num2;
        echo "El resultado de la suma es : ".$res."<br>";
        break;
    case '-':
        $res = $num1 - $num2;
        echo "El resultado de la resta es : ".$res."<br>";
        break;
    case '*':
        $res = $num1 * $num2;
        echo "El resultado de la multiplicacion es : ".$res."<br>";
        break;
    case '/':
        if($num2 == 0){
            echo "No se puede dividir por 0";
        }else{
            $res = $num1 / $num2;
            echo "El resultado de la division es : ".$res."<br>";
        }
        break;
    default:
        echo "No se Ingreso ningun operador";
        break;
}
