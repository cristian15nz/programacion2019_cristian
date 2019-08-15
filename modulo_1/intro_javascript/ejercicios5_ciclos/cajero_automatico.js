alert("Bienvenido a TuBancoNoruego. Seguridad al 100%");

var cliente = {
    nombre: "Cristian",
    apellido: "Nunez",
    edad: 23,
    balance: 15000,
    tarjeta: 102030, // Una tarjeta de 6 digitos
    pin: 8888,
    tipoCuenta: "debito"
}

// 0. Seleccionar idioma
var idioma = prompt("Seleccione su idioma");

// 1. Introducir tarjeta
var tarjeta = prompt("Introduzca la tarjeta, por favor");

// Validar que la longitud de digitos sea 6
while (tarjeta.length !== 6) {
    tarjeta = prompt("Introduzca una tarjeta de 6 digitos");
}

// Validar que la tarjeta ingresada coincida con la mia
while (tarjeta != cliente.tarjeta) {
    tarjeta = prompt("Tarjeta no encontrada. Intente de nuevo");
}

// 2. Digitar PIN
var pin = prompt("Digite su PIN");

// Validar que la longitud de digitos sea 4
while (pin.length !== 4) {
    pin = prompt("Digite un PIN valido");
}

// Validar que el PIN ingresado coincida con la mia
while (pin != cliente.pin) {
    pin = prompt("PIN invalido. Intente de nuevo");
}

// 3. Mostrar opciones a realizar
// 4. Seleccionar opcion a realizar
var opcion = prompt(`Elija opcion a realizar
    1. Retiro
    2. Avance
    3. Chequear Balance
    4. Deposito`);

// Validar que el usuario solo pueda digitar las opciones del 1 al 4
while (opcion > 4 || opcion < 1) {
    opcion = prompt(`Opcion Invalia. Elija opcion a realizar
    1. Retiro
    2. Avance
    3. Chequear Balance
    4. Deposito`);
}

// 5. Seleccionar tipo de cuenta
var tipoCuenta = prompt(`Seleccione el Tipo de Cuenta
    1. Cuenta de Ahorro
    2. Tarjeta de Credito
    3. Cuenta Corriente`);

// 6. Mostrar opciones de monto
// 7. Seleccionar monto
var opcionMonto = prompt(`Elija monto que quiere
    1. 200$
    2. 500$
    3. 1000$
    4. 1500$
    5. 2000$
    6. 2500$
    7. 3000$
    8. Otro monto`);

// 8. Mostrar opcion de recibo
var quiereComprobante = confirm("¿Desea un comprobante?");

// 9. Elegir SI o NO del recibo
if (quiereComprobante) {
    // Imprimir recibo
    alert("Imprimiendo recibo...");
} 
// Si no se hace lo contrario, podemos eliminar el else
else {
    // No imprimir recibo, no hace nada
}

// 10. Mostrar mensaje de Retirar dinero 
alert("Retira tu dinero");

// 11. Mostrar mensaje de Retirar tarjeta
alert("Retira tu tarjeta");