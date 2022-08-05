<!-- Escriba una función que permita multiplicar dos números sin utilizar el signo
de multiplicación -->

<?php 

function multiply2numbers($n1, $n2)
{
    $result = 0;

    if ($n1 < 0 && $n2 < 0) {
        for ($i=0; $i < -$n2; $i++) { 
            $result += -$n1;
        }
        return $result;
    }

    if($n2 < 0) {
        for ($i=0; $i < -$n2; $i++) { 
            $result += $n1;
        }
        return -$result;
    }

    for ($i=0; $i < $n2; $i++) { 
        $result += $n1;
    }

    return $result;
}

// Utilize el signo de multiplicacion para resolver cambiar de signo a los numeros negativos.

echo multiply2numbers(-4, 5);

?>