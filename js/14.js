//Arreglos o Array

const numeros = [10,20,30,40,50];
console.table(numeros);

//Acceder a los valores de un arreglo
//console.log(numeros[0]);
//console.log(numeros[1]);
//console.log(numeros[2]);
//console.log(numeros[3]);
//console.log(numeros[4]);

//Conocer la extension de un arreglo
//console.log(meses.length)

//numeros.forEach (function(numero){
//    console.log(numero);
//})

numeros.push(60,70,80); //Agregar al final del arreglo
numeros.unshift(-10,-20,-30);//Agrega al inicio del arreglo

console.table(numeros);


const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

//meses.pop(); //Elimina el ultimo elemento
//meses.shift(); //Elimina el primer elemento

//meses.splice(2,1); //Agregar un elemento (Posicion donde se va eliminar, Cuantos se van a eliminar)
//console.table(meses);

//Rest Operator o Spread Operator

const nuevoArreglo = [...meses, 'Junio'];
console.table(nuevoArreglo)
