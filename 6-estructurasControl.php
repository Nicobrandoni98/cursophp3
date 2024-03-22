<?php


// Condicional IF, ELSE IF, ELSE
/* 
$valorA = 1;

if ($valorA == 10) {
    echo "Es igual a 10";
} else 
    echo "No es igual a 10";
*/


// While / do-While

/* $i = 0;

while ($i <= 10) {
    echo $i++ . "\n";
}
*/


/* 
$a = 0;
do {
    echo $a++ . "\n";
} while ($a <= 10);
*/




// for / foreach

/* 
$arr = [1,2,3,4,5,6];

for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i] . "\n";
}
*/

/* $arr = [1,2,3,4,5,6];

 foreach ($arr as $valor) {
    echo $valor . "\n";
} 
*/




// SWITCH

$valorA = 2;

switch ($valorA) {
    case 1:
        echo "El valor es 1";
        break;
    case 2:
        echo "El valor es 2";
        break;
    case 3:
        echo "El valor es 3";
        break;
    case 4:
        echo "El valor es 4";
        break;

    default:
        echo "No es ninguno de los valores 1, 2, 3 o 4";
        break;
}







echo "\n";