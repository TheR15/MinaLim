const producto ={
    nombreProducto : "Monitor 20 Pulgadas",
    precio: 300,
    disponible: true
}

const medidas = {
    peso : '1kg',
    medida : '1m'
}

const nuevoProducto = { ...producto, ...medidas}//Une dos Objetos sin necesidad de modificarlos

console.log(nuevoProducto);