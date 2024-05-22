


const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

const carrito = [
    {nombre :'Monitor 20 Pulgadas', precio:500},
    {nombre :'Television 50 pulgadas', precio:700},
    {nombre :'Tablet', precio:300},
    {nombre :'Audifonos', precio:200},
    {nombre :'Teclado', precio:50},
    {nombre :'Celular', precio:500},
    {nombre :'Bocinas', precio:300},
    {nombre :'Laptop', precio:800},
];

//forEach 
meses.forEach(mes => {//recorre el arreglo para ver si existe el valor
    if(mes == 'Marzo'){
        console.log('Marzo si existe')
    }
})

let resultado;

//Some ideal para arreglos
resultado = carrito.some(producto => producto.nombre === 'Celular PRO');

//Reduce 
resultado = carrito.reduce ((total,producto) => total + producto.precio,0);

//Filter
resultado = carrito.filter(producto => producto.nombre == 'Monitor 20 Pulgadas');

console.log(resultado);

