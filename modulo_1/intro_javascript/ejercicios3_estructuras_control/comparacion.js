// Operadores Aritmeticos
// console.log(2 + 3 - 1);     // 4
// console.log(4 * 3 / 2);     // 6
// console.log(4 / 3 * 2);     // 
// console.log(11 % 3 ** 2);   // 2

/* Ejercicio 1
Digitar 2 numeros y mostrar su 
suma, resta, multiplicacion, division, potencia y residuo.
*/
var numero1 = parseInt( prompt("Digite el numero 1") );
var numero2 = parseInt( prompt("Digite el numero 2") );

var suma = numero1 + numero2;
var resta = numero1 - numero2;
var multiplicacion = numero1 * numero2;
var division = numero1 / numero2;
var potencia = numero1 ** numero2;
var residuo = numero1 % numero2;

console.log(suma);
console.log(resta);
console.log(multiplicacion);
console.log(division);
console.log(potencia);
console.log(residuo);