// Dado un número, mostrar su serie de Fibonacci. (La serie de Fibonacci es un
// orden de números dónde cada número es la suma de los dos anteriores).

const fibonacci = (n) => {
    let fibonacciList = [0, 1];
    if(n < 0) return 'Debe ingresar un número mayor o igual a 0';
    if(n === 0) return [0];

    for(let i = 2; i <= n; i++ ){
        let result = fibonacciList[i-1] + fibonacciList[i-2];
        fibonacciList.push(result)
    }
    return fibonacciList;
}

console.log(fibonacci(10));