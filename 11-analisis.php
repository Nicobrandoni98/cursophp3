<?php

$palabras = ["sol", "luna", "cielo", "luz", "arco", "milanesa"];

for ($i=0; $i < count($palabras); $i++) { 
    if ($_REQUEST["palabra".$i] == $palabras[$i]) {
        echo "La palabra ingresada es correcta" . "<br>";
    } else {
        echo "La palabra ingresada es incorrecta, la palabra correcta es: ". $palabras[$i]."<br>";
    }
}
?>