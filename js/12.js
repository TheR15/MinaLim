"use strict";//JavaScript en modo estricto, te marca los errores

const producto ={
    nombreProducto : "Monitor 20 Pulgadas",
    precio: 300,
    disponible: true
}

Object.freeze(producto); // .freeze no te permite eliminar, asignar y modificar un objeto
                         // .seal no te permite eliminar y asignar atributos a un objeto pero si te permite modificar los que ya estan creados
producto.precio = 'Nuevo Precio';

delete producto.precio;

console.log(producto);