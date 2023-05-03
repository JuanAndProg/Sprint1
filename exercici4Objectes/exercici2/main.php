<?php
// Creem un objecte Rectangle i Triangle
$rectangle = new Rectangle(10, 5);
$triangle = new Triangle(8, 6);

// Fem la crida al mètode area de cada objecte
echo "Àrea del rectangle: " . $Rectangle->area() . "\n"; // 50
echo "Àrea del triangle: " . $Triangle->area() . "\n"; // 24
?>