<?php 
// Dada una cadena de texto, darle la vuelta a invertir el orden de sus caracteres,
// sin usar métodos propios del lenguaje, sólo estructuras de control.

function reverseString($text)
{
    $result = '';

    for ($i = strlen($text) - 1; $i >= 0 ; $i--) { 
        $result = $result.$text[$i];
    }

    return $result;
}

echo reverseString('Prueba tecnica');

?>