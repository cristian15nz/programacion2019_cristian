// Informacion del sitio web
var sitioWeb = {
    titulo: "Bienvendios a XtudioPlay",
    subtitulo: "Diseño y Desarrollo Web",
    color: "azul",
    tieneLogo: false,
    creador: "Cristian Nuñez y Juan Perez",
    año: 2019,
    servicios: "Creación de Sitios Web"
}

// Cambiar el titulo a la pagina
document.title = sitioWeb.titulo + " - " + sitioWeb.subtitulo;

// Mostrar informacion del sitio en la pagina
var h1 = document.querySelector("#info");

console.log(h1);

h1.innerHTML = "Sitio web creado por " + sitioWeb.creador + " en el año " + sitioWeb.año;