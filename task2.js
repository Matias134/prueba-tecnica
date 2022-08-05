// Dada una cadena de texto, darle la vuelta a invertir el orden de sus caracteres,
// sin usar métodos propios del lenguaje, sólo estructuras de control.

const reverseString = (text) => {
    let result = '';

    for(let i = text.length-1; i >= 0; i--){
        result += text[i];
    }

    return result;
}
console.log(reverseString('Prueba tecnica'))