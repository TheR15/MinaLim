//Array Methods

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
meses.forEach(function(mes){//recorre el arreglo para ver si existe el valor
    if(mes == 'Marzo'){
        console.log('Marzo si existe')
    }
})

//Includes 
let resultado = meses.includes('Diciembre');//Verifica si existe en el arreglo
//console.log(resultado);

//Some ideal para arreglos
resultado = carrito.some(function(producto){
    return producto.nombre === 'Celular'
})

//Reduce 
resultado = carrito.reduce (function(total,producto){//Suma los valores del arreglo
    return total + producto.precio
},0);


//Filter
resultado = carrito.filter(function(producto){//Filtra los valores
    return producto.nombre == 'Celular'
});

console.log(resultado);