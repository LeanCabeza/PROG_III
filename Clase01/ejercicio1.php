<?php
//Leandro Cabeza Ejercicio 1
/*
	Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
	supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
	se sumaron.
*/	
	$resultadoSuma = 0;

	 for ($numero=0; $resultadoSuma < 1000 ;)
	 { 	 	
	 		$numeroASumar = $numero + 1 ;
			
			$resultadoSuma = $numero + $numeroASumar ;

			if ($resultadoSuma < 1000)
			{
			echo "Numeros que se suman :",$numero ," + " , $numero + 1 ;
			echo "<br>";
			echo "Resultado :",$resultadoSuma ;
			echo "<br>";
			$numero++ ;

			}
	} 
				echo "Cantidad de numeros Sumados : " ,$numero;
?>