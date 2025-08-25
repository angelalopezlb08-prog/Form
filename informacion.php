<?php
$Producto1= $_POST ['Producto1'];
$Valor1= $_POST ['Valor1'];
$Producto2= $_POST ['Producto2'];
$Valor2= $_POST ['Valor2'];
$Producto3= $_POST ['Producto3'];
$Valor3= $_POST ['Valor3'];

$suma = $Valor1 + $Valor2 + $Valor3;
$descuento = $suma * 0.16;
$actdesc = $suma - $descuento;

echo "El nombre del primer producto es: $Producto1 <br>";
echo "El nombre del segundo producto es: $Producto2 <br>";
echo "El nombre del tercer producto es: $Producto3 <br>";
echo "La suma de los 3 precios es: $suma <br>";
echo "Teniendo encuenta un descuento del 16% el valor es: $actdesc <br>"; 
?>
