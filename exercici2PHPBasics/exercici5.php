<?php
// Crea els dos arrays i afegeix un valor nou a l'array de 3 elements
$array1 = array(1, 3, 4, 5, 7);
$array2 = array(8, 11, 12);
$array2[] = 15;

// Mescla els dos arrays amb la funció array_merge()
$array_resultant = array_merge($array1, $array2);

// Imprimeix la mida de l'array resultant
echo "Mida de l'array resultat: ".count($array_resultant). "<br>";

// Imprimeix l'array resultant valor a valor amb un bucle foreach
foreach ($array_resultant as $valor) {
    echo $valor."<br>";
}
