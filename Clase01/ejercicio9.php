<?php
/*
    Aplicación No 9 (Arrays asociativos)
    Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
    contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
    lapiceras.

    Alumno : Cabeza Leandro
*/

$color = array("Rojo", "Azul", "Negro", "Violeta","Verde");
$precio = array(100,50,200,120,80);
$marca = array ("Bic","Generica", "Faber", "Otra");
$trazo = array ("Fino", "Grueso", "Mediano");

$lapiceras = array(array("Color"=>$color[rand(0,4)],"Precio"=>$precio[rand(0,4)],"Marca"=>$marca[rand(0,3)],"Trazo"=>$trazo[rand(0,2)]),array("Color"=>$color[rand(0,4)],"Precio"=>$precio[rand(0,4)],"Marca"=>$marca[rand(0,3)],"Trazo"=>$trazo[rand(0,2)]),array("Color"=>$color[rand(0,4)],"Precio"=>$precio[rand(0,4)],"Marca"=>$marca[rand(0,3)],"Trazo"=>$trazo[rand(0,2)]));

foreach ($lapiceras as $i=> $lapicera)
{
    echo "Lapicera, $i </br>";
    foreach($lapicera as $x=> $datos)
    {
        echo $x,": ", $datos,"\t";
    }
    echo "</br>";
}
?>
