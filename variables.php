<?php
#variable Numerica
$numero = 5;
echo "Esto es una variable Numero: $numero";
echo "<br></br>";


 #variable Texto
$palabra = "palabra";
echo "Esto es una variable texto: $palabra";
echo "<br></br>";
#Variable $boleana
$boleana = true;
echo "Esto es una variable boleana: $boleana";
echo "<br></br>";
#variable arreglo
$colores = array ("rojo", "amarillo");
echo "esto es una variable de arreglo: $colores[0]";
echo "<br></br>";

#variable arreglo con propiedades
$verduras = array("verdura1"=>"lechuga","verdura2"=>"cebolla");
echo "esto es una variable arreglo con propiedades: $verduras[verdura1]";
echo "<br></br>";

#variable de tipo objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "esto es una variable de tipo objeto: $frutas->fruta1";
echo "<br></br>";
?>
