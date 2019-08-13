// #1
var base = parseInt(prompt("Digite la base"));
var altura = parseInt(prompt("Digite la altura"));

var potencia1 = base ** 2;
var potencia2 = altura ** 2;

var sumaPotencia = potencia1 + potencia2;

var raizCuadrada = Math.sqrt(sumaPotencia);

alert(`La hipotenusa es ${raizCuadrada.toFixed(1)}`);

// #2
var nota1 = parseInt(prompt("Digite primera nota"));
var nota2 = parseInt(prompt("Digite segunda nota"));
var nota3 = parseInt(prompt("Digite tercera nota"));
var nota4 = parseInt(prompt("Digite cuarta nota"));
var promedio = nota1 + nota2 + nota3 + nota4;

alert(`El promedio es ${promedio / 4}`);


// #3
var velocidad = parseFloat(prompt("Digite la velocidad"));
var tiempo = parseFloat(prompt("Digite el tiempo"));
var distancia;

distancia = velocidad * tiempo;

alert(`La distancia recorrida es ${distancia}`);


// #4
// Es similar al primero
var cateto1 = parseInt(prompt("Digite la cateto1"));
var cateto2 = parseInt(prompt("Digite la cateto2"));

var hipotenusa = Math.sqrt( (cateto1 ** 2) + (cateto2 ** 2) );

alert(`La hipotenusa es ${hipotenusa.toFixed(1)}`);

// #5
for(var numero= 1; numero<=100; numero++){
    console.log(numero);
}

// #6
var anio = parseInt(prompt("Digite su año de nacimiento"));

var edad = 2019 - anio;

alert(`Su edad es ${edad}`);

// #7
var dia = parseInt(prompt("Digite un dia"));

if (dia == 1) {
    alert("Lunes");
}
else if (dia == 2) {
    alert("Martes");
}
else if (dia == 3) {
    alert("Miercoles");
}
else if (dia == 4) {
    alert("Jueves");
}
else if (dia == 5) {
    alert("Viernes");
}
else if (dia == 6) {
    alert("Sabado");
}
else if (dia == 7) {
    alert("Domingo");
}

// #8
var mes = parseInt(prompt("Digite un numero para ver que mes es"));

if (mes == 1) {
    alert("Enero");
}
if (mes == 2) {
    alert("Febrero");
}
if (mes == 3) {
    alert("Marzo");
}
if (mes == 4) {
    alert("Abril");
}
if (mes == 5) {
    alert("Mayo");
}
if (mes == 6) {
    alert("Junio");
}
if (mes == 7) {
    alert("Julio");
}
if (mes == 8) {
    alert("Agosto");
}
if (mes == 9) {
    alert("Septiembre");
}
if (mes == 10) {
    alert("Octubre");
}
if (mes == 11) {
    alert("Noviembre");
}
if (mes == 12) {
    alert("Diciembre");
}

// #9
var numero = parseInt(prompt("Digite un numero para ver si es par o no"));

if (numero % 2 == 0) {
    alert("El numero es par");
} else {
    alert("El numero es impar");
}

// #10
for (var numero = 1; numero <= 100; numero++) {
    
    // Solo imprimir los numero pares
    if (numero % 2 == 0) {
        document.write(`<p>${numero}</p>`);
    }

}