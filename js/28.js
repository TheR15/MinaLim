//Classes

class Producto {
    constructor(nombre, precio){
        this.nombre = nombre;
        this.precio = precio;
    }

    formatearProducto(){
        return `El producto ${this.nombre} tiene un precio de ${this.precio}`;
    }
}

//Objeto

const nombreObjeto = new nombreClase (Valores,Separados,Coma);

const producto1 = new Producto ('Monitor Curvo de 49"', 1500);

//Herencia

class Libro extends Producto{
    constructor(nombre,precio,isbn){
        super(nombre, precio);
        this.isbn = isbn;
    }
    formatearProducto(){
        return `${super.formatearProducto()} y su isbn es ${this.isbn}`;
    }
}

const libro = new Libro ('JavaScript la Revolucion',120,'1212132321')

console.log(libro.formatearProducto());



















//Classes

class Producto {
    constructor(nombre, precio){
        this.nombre = nombre;
        this.precio = precio;
    }

    formatearProducto(){
        return `El producto ${this.nombre} tiene un precio de ${this.precio}`;
    }
}

const producto1 = new Producto ('Monitor Curvo de 49"', 1500);

//Herencia

class Libro extends Producto{
    constructor(nombre,precio,isbn){
        super(nombre, precio);
        this.isbn = isbn;
    }
    formatearProducto(){
        return `${super.formatearProducto()} y su isbn es ${this.isbn}`;
    }
}

const libro = new Libro ('JavaScript la Revolucion',120,'1212132321')

console.log(libro.formatearProducto());
