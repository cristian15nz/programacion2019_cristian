var estudiante = {
    nombre: "Cristian",
    edad: 18,
    tieneHijos: false,
    tieneCarro: false,
    estaCasado: false,
}

if (estudiante.edad >= 18) {
    console.log(`${estudiante.nombre} es mayor de edad`);
}

if (estudiante.edad < 18) {
    console.log(`${estudiante.nombre} es menor de edad`);
}

var abierto = false;

if (abierto) {
    console.log("Esta abierto");
} 
else {
    console.log("Esta cerrado");
}

if (estudiante.edad >= 18) {
    console.log("Es mayor de edad");
} else {
    console.log("Es menor de edad");
}

// Operadores
console.log(10 + 3); // Resultado: 13
console.log(3 * 6); // Resultado: 18
console.log(7 - 6); // Resultado: 1

console.log(8 > 0); // Resultado: true
console.log(1 < 0); // Resultado: false
console.log(0 > 0); // Resultado: false

console.log(15 >= 15); // Resultado: true
console.log(10 <= 10); // Resultado: true
console.log(3 < 3); // Resultado: false

console.log(-1 > 5); // Resultado: false
console.log(-10 > 10); // Resultado: false
console.log(10 > -10); // Resultado: true

console.log(10 >= 10); // Resultado: true
console.log(7 * 7); // Resultado: 49
console.log(1 < 1); // Resultado: false
