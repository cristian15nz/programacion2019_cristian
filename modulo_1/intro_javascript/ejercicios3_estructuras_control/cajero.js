// 0. Seleccionar idioma
var idioma = prompt("Seleccione su idioma");

// 1. Introducir tarjeta
var tarjeta = prompt("Introduzca la tarjeta, por favor");

// Validar que la longitud de digitos sea 12
// Mostrar un mensaje en caso que la longitud sea mayor que 12
if (tarjeta.length > 12) {
    alert("La tarjeta no es valida");
}

// 2. Digitar PIN
var pin = prompt("Digite su PIN");

// Validar que la longitud de digitos sea 4
// Mostrar un mensaje en caso que la longitud sea mayor que 4
if (pin.length > 4) {
    alert("PIN invalido");
}

// 3. Mostrar opciones a realizar
// 4. Seleccionar opcion a realizar
var opcion = prompt(`Elija opcion a realizar
    1. Retiro
    2. Avance
    3. Chequear Balance
    4. Deposito`);

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