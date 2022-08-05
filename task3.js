// Escriba una función que permita multiplicar dos números sin utilizar el signo
// de multiplicación

const multiply2numbers = (n1, n2) => {
    let result = 0;

    if(n1 < 0 && n2 < 0){
        n1 = n1*-1;
        n2 = n2*-1

        for(let i = 1; i <= n2; i++){
            result += n1;
        }
        return result;
    }
    
    if(n2 < 0){

        n2 = n2*-1;

        for(let i = 1; i <= n2; i++){
            result += n1;
        }
        return result * -1;
    }

    for(let i = 1; i <= n2; i++){
        result += n1;
    }
    return result;
}

//Utilize el signo de multiplicacion para resolver cambiar de signo a los numeros negativos.

console.log(multiply2numbers(-5, 4));