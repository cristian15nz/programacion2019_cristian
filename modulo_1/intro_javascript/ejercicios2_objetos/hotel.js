var nombreHotel = "Hodelpa Hotel";
var ratingHotel = 4.8;
var habitacionesHotel = 305;
var reservacionesHotel = 200;
var tieneGymHotel = false;

console.log(nombreHotel);
console.log(ratingHotel);
console.log(habitacionesHotel);
console.log(reservacionesHotel);
console.log(tieneGymHotel);

var hotel = {
    nombre: "Hodelpa Hotel",
    rating: 4.8,
    habitaciones: 305,
    reservaciones: 200,
    tieneGym: false
}

console.log(hotel.nombre);
console.log(hotel.rating);
console.log(hotel.habitaciones);
console.log(hotel.reservaciones);
console.log(hotel.tieneGym);

// Concatenar vs Template String
console.log(`Hola, 
soy un template string`);
console.log("Bienvenido al hotel " + hotel.nombre + " que tiene " + hotel.rating + " de rating");
console.log(`Bienvenido al hotel ${hotel.nombre} que tiene ${hotel.rating} de rating`);

console.log("El hotel tiene " + hotel.reservaciones + " reservaciones");
console.log(`El hotel tiene ${hotel.reservaciones} reservaciones`);

console.log("El hotel tiene " + hotel.habitaciones);
console.log(`El hotel tiene ${hotel.habitaciones} habitaciones`);

console.log("El hotel tiene " + hotel.reservaciones + " reservaciones de " + hotel.habitaciones + " habitaciones");


console.log("El hotel tiene " + (hotel.habitaciones - hotel.reservaciones) + " disponibles");
console.log(`El hotel tiene ${hotel.habitaciones - hotel.reservaciones} disponibles`)

console.log(hotel.nombre + " posee un rating de " + hotel.rating + ". posee " + hotel.habitaciones + " habitaciones." + " posee " + hotel.reservaciones + " reservadas");
console.log(`${hotel.nombre} posee un rating de ${hotel.rating}. Posee ${hotel.habitaciones} habitaciones. Posee ${hotel.reservaciones} reservadas`)


document.write(`<h1>Bienvenidos a ${hotel.nombre}</h1>
<p>Este hotel es de ${hotel.rating} estrellas</p>
<p>Actualmente tenemos ${hotel.habitaciones} habitaciones de las cuales ${hotel.reservaciones} estan reservadas</p>
`);