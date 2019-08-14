/*

// 1. Hacer una suma de numeros positivos. 
// Validar que el usuario no pueda ingresar numeros negativo.

var num1 = parseInt( prompt("Escribe tu primer digito:") );
while(num1 < 0){
    num1 = parseInt( prompt("Solo numero positivo:") );
}

var num2 = parseInt( prompt("Escribe tu segundo digito:") );
while(num2 < 0){
    num2 = parseInt( prompt("Solo numero positivo:") );
}

var resultado = num1 + num2;
alert(`La suma de ${num1} + ${num2} = ${resultado}`);


// 2. Hacer un programa para digitar una edad. 
// La edad solo debe estar entre 18 y 25.
var edad = parseInt(prompt("Digite su edad"));

while(edad < 18 || edad > 25) {
    edad = parseInt(prompt("Digita un numero entre 18 - 25"));
}

alert(`La edad digitada es ${edad}`);


// 3. Hacer un programa que se digite un PIN de 4 digitos. 
// Validar que el PIN digitado tenga 4 digitos.
var pin = prompt("Digite su PIN");

alert(pin.length);

while (pin.length !== 4) {
    pin = prompt("El PIN digitado tiene mas de 4 digitos o menos. Intentelo de nuevo");
}


// 4. Hacer un programa que el usuario no pueda ingresar numeros entre 70 y 99.
var numero = parseInt(prompt("Digite un numero"));

while (numero > 70 || numero < 90) {
    numero = parseInt(prompt("Digite un numero (no puede estar entre 70 y 90)"));
}


// 5. Hacer un programa que el usuario deba digitar un monto válido 
// para abrir su cuenta de banco. Este monto es de 600 pesos.
var monto = parseInt(prompt("Digite el monto"));

while (monto < 600) {
    monto = parseInt(prompt("Digite un monto valido"));
}

alert("Bienvenido a su cuenta nueva");


// 6. Hacer un programa que se digite una edad válida para entrar a INFOTEP.
var edad = parseInt(prompt("Digite una edad para entrar a INFOTEP"));

while (edad < 16) {
    edad = parseInt(prompt("Digite una edad válida para entrar a INFOTEP"));
}

alert("Bienvenido a INFOTEP");


// 7. Hacer un programa para validar una contraseña. 
// Debe tener como mínimo 8 caracteres.
var contraseña = prompt("Digite una contraseña");

while (contraseña.length < 8) {
    contraseña = prompt("Digite una contraseña que tenga como minimo 8 caracteres");
}

alert("La contraseña es válida");


// 8. Hacer un programa que solo se digite numeros impares
// var numero = parseInt(prompt("Digite un numero"));

// while (numero % 2 === 0) {
//     numero = parseInt(prompt("Digite un numero impar"));
// }


// 9. Hacer un programa que solo se digite numeros negativos
// var numero = parseInt(prompt("Digite un numero"));

// while (numero > 0) {
//     numero = parseInt(prompt("Digite un numero negativo"));
// }

do {
    var numero = parseInt(prompt("Digite un numero que sea negativo"));
} while (numero > 0);


// 10. Hacer un programa que se digite sólo numeros positivos y par
// (usando do...while);
do {
    var numero = parseInt(prompt("Digite un numero positivo y par"));
} while( !(numero > 0 && numero % 2 === 0) );

do {
    var numero = parseInt(prompt("Digite un numero positivo y par"));
} while(numero < 0 || numero % 2 === 1); 
*/

// 11. Validar que 2 contraseñas digitadas coincidan.
do {
    var contraseña1 = prompt("Digite la contraseña");
    var contraseña2 = prompt("Digite la confirmación de la contraseña");
} while ( !(contraseña1 === contraseña2));