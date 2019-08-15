// Break
for(var numero = 1; numero <= 100; numero++) {

    if (numero == 50) {
        break;
    }

    document.write(`<p>${numero}</p>`);
}

// Continue
for (var numero = 1; numero <= 100; numero++) {

    if (numero % 2 == 0) {
        continue;
    }

    // Despues que ejecuta el continue
    // No se ejecuta esta parte
    document.write(`<p>${numero}</p>`);
}