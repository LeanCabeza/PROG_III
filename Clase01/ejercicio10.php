<?php

    /*
        Aplicación No 10 (Arrays de Arrays)
        Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
        contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
        Arrays de Arrays.
        Alumno : Cabeza Leandro
    */

    $lapicera1 = array("color"=>"rojo", "marca"=>"Dolphin", "trazo"=>"grueso", "precio"=>100);
    $lapicera2 = array("color"=>"negro", "marca"=>"Bic", "trazo"=>"fino", "precio"=>120);
    $lapicera3 = array("color"=>"azul", "marca"=>"Generica", "trazo"=>"grueso", "precio"=>80);
    $vec = array();
    
    array_push($vec, $lapicera1, $lapicera2, $lapicera3);
    
    for ($i=0; $i < count($vec); $i++) { 
        echo "Lapicera, $i </br>";
        foreach ($vec[$i] as $x => $value) {
            print("<br/> Clave: $x - Valor: $value");
        }
    }
    
    ?>

?>