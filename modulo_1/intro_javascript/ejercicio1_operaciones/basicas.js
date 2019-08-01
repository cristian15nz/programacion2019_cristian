// (ENTRADA) El usuario digita 2 valores
var valor1 = prompt("Digita el primer valor");
var valor2 = prompt("Digita el segundo valor");

// NOTA: El prompt devuelve los valores como texto
// En JavaScript cuando sumamos el texto, lo une (concatena)
// Cuando vayamos a trabajar con numeros, es decir, convertir texto a numero
// debemos usar la funcion parseInt()

console.log("15" + "15");
console.log( parseInt("15") + parseInt("15") );
console.log(15 + 15);

console.log(valor1);
console.log(valor2);

// (PROCESO) Hacer las operaciones con los valores
var suma = parseInt(valor1) + parseInt(valor2);
var resta = parseInt(valor1) - parseInt(valor2);
var multiplicacion = parseInt(valor1) * parseInt(valor2);
var division = parseInt(valor1) / parseInt(valor2);

// (SALIDA) Imprimir los valores
console.log(suma);
console.log(resta);
console.log(multiplicacion);
console.log(division);