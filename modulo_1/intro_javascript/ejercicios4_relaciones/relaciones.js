var carro = {
    tieneBateria: false,
    tengoLlave: false,
}

if (carro.tieneBateria && carro.tengoLlave) {
    console.log("El carro va a encender");
} 
else {
    console.log("No enciende");
}

// Poder comer
var mesa = {
    hayCuchara: false,
    hayTenedor: false,
}

if (mesa.hayCuchara || mesa.hayTenedor) {
    console.log("Puedo comer :D");
}
else {
    console.log("No puedo comer :(");
}