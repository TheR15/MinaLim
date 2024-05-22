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

//for

for(let i = 0; i<carrito.length; i++){
    console.log(carrito[i].nombre);
}

//While
//let i = 0;

//while(i<carrito.length){
//    console.log(carrito[i].nombre);
//    i++;
//}

//Do While EL codigo se ejecutara al menos una vez
i = 0;

do{
    console.log(carrito[i].nombre);
    i++;
}while(i<carrito.length);