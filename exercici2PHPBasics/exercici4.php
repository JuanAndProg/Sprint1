<?php
// Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor.
$x = 10;
$y = 5;
$n = 3.14;
$m = 2.71;

// Mostra per pantalla per a X i Y el valor de cada variable, la suma, la resta, el producte i el mòdul.
echo "X = $x <br>";
echo "Y = $y <br>";
echo "Suma = " . ($x + $y) . "<br>";
echo "Resta = " . ($x - $y) . "<br>";
echo "Producte = " . ($x * $y) . "<br>";
echo "Mòdul = " . ($x % $y) . "<br>";

// Per N i M realitzaràs el mateix.
echo "N = $n <br>";
echo "M = $m <br>";
echo "Suma = " . ($n + $m) . "<br>";
echo "Resta = " . ($n - $m) . "<br>";
echo "Producte = " . ($n * $m) . "<br>";
echo "Mòdul = " . ($n % $m) . "<br>";

// El doble de cada variable.
echo "Doble de X = " . ($x * 2) . "<br>";
echo "Doble de Y = " . ($y * 2) . "<br>";
echo "Doble de N = " . ($n * 2) . "<br>";
echo "Doble de M = " . ($m * 2) . "<br>";

// La suma de totes les variables.
echo "Suma total = " . ($x + $y + $n + $m) . "<br>";

// El producte de totes les variables.
echo "Producte total = " . ($x * $y * $n * $m) . "<br>";
?>
