// ---Ejercicio 1
// ENTRADA
/*var num1 = parseInt( prompt("Digite el numero 1") );
var num2 = parseInt( prompt("Digite el numero 2") );

// PROCESO
var suma = num1 + num2;
var resta = num1 - num2;

// SALIDA
console.log(suma);
console.log(resta);
*/

// ---Ejercicio 2
// ENTRADA

/*
var numero2 = parseInt( prompt("Digite el segundo numero"));

// PROCESO Y SALIDA
alert(`Las operaciones basicas son: 
1. Suma
2. Resta
3. Multiplicacion
4. Division
`);

var operacion = parseInt( prompt("Digite que operacion desea hacer") );

// Condiciones
// Suma
if (operacion == 1) {
    var suma = numero1 + numero2;
    console.log(suma);
}

// Resta
if (operacion == 2) {
    var resta = numero1 - numero2;
    console.log(resta);
}

// Multiplicacion
if (operacion == 3) {
    var multiplicacion = numero1 * numero2;
    console.log(multiplicacion);
}

// Division
if (operacion == 4) {
    var division = numero1 / numero2;
    console.log(division);
}

*/
// Ejercicio 3
/*  
var empleado = {
    nombre: prompt("Digite su nombre empleado"),
    horas: parseInt(prompt("Digite las horas trabajadas")),
    pagoPorHoras: parseInt(prompt("Digite el pago por horas"))

}

document.write(`<h2>${empleado.nombre}, horas trabajadas:               ${empleado.horas}, total a cobrar ${empleado.horas * empleado.pagoPorHoras} <h2>`);

var nombre = prompt("Digite su nombre");
var horas = parseInt(prompt("Horas trabajadas"));
var pxhora = parseInt(prompt("Digite el pago por hora"));

document.write(`<h2>${nombre}, horas trabajadas:${horas}, total a cobrar ${horas * pxhora} <h2>`);
/*

// Ejercicio 4
var ano = parseInt( prompt("Digite tu ano de nacimiento :") );

var edad = 2019 - ano;

console.log(edad);

//Ejercicio 5

// var numpar = prompt ("Digite un numero:");

//  if (numpar %2==0 {
//     console.log (Es un numero par);
//  }
//   else {
//      console.log( no es un numero par);
//  }


// Positivo o Negativo
var numero = parseInt( prompt("Digite el numero") );

if (numero > 0) {
    console.log("Es positivo");
} 
else if (numero === 0) {
    console.log("El numero es 0");
}
else {
    console.log("Es negativo");
}


*/
var estudiante = {
    nombre: prompt("Digite su nombre"),
    Ano: parseInt( prompt("Digite ano de nacimiento")),
}

if (estudiante.Ano > 0){
    var edad = 2019 - estudiante.Ano;
    document.write(`${edad}, ano es positivo`);
}