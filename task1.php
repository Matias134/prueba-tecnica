<?php
// Dado un número, mostrar su serie de Fibonacci. (La serie de Fibonacci es un
// orden de números dónde cada número es la suma de los dos anteriores).
function fibonacci($n)
{
    $fibonacciList = [0,1];
    if($n < 0){
        echo "Debe ingresar un numero mayor igual a 0";
    }

    if($n === 0){
        return [0];
    }

    for ($i = 2; $i <= $n; $i++) {
         array_push($fibonacciList, $fibonacciList[$i - 1] + $fibonacciList[$i - 2]);
    }

    return $fibonacciList;
}

echo implode(",", fibonacci(10));
?>