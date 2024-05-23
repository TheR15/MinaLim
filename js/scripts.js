const datos = {
    nombre : '',
    edad : '',
    lugarNacimiento : '',
    fechaNacimiento : '',
    domicilio: '',
    ocupacion : '',
    religion : '',
    celular : '',
    correo : '',
    numeroEmergencia : '',
    motivoConsulta: ''
}

const nombre = document.querySelector('#nombre');
const edad = document.querySelector('#edad');
const lugarNacimiento = document.querySelector('#lugarNacimiento');
const fechaNacimiento = document.querySelector('#fechaNacimiento')
const domicilio = document.querySelector('#domicilio');
const ocupacion = document.querySelector('#ocupacion');
const religion = document.querySelector('#religion');
const celular = document.querySelector('#celular')
const correo = document.querySelector('#correo');
const numeroEmergencia = document.querySelector('#numeroEmergencia');
const motivoConsulta = document.querySelector('#motivoConsulta')
const formulario = document.querySelector('.formulario')

nombre.addEventListener('input', leerTexto);
edad.addEventListener('input', leerTexto);
lugarNacimiento.addEventListener('input', leerTexto);
fechaNacimiento.addEventListener('input', leerTexto);
domicilio.addEventListener('input', leerTexto);
ocupacion.addEventListener('input', leerTexto);
religion.addEventListener('input', leerTexto);
celular.addEventListener('input', leerTexto);
correo.addEventListener('input', leerTexto);
numeroEmergencia.addEventListener('input', leerTexto);
motivoConsulta.addEventListener('input', leerTexto);


formulario.addEventListener('submit', function(evento){
    evento.preventDefault();
    //Validar formulario
    const {nombre, edad, lugarNacimiento, fechaNacimiento, domicilio, ocupacion, religion, celular, correo, numeroEmergencia, motivoConsulta } = datos;
    
    if(nombre === '' || edad === '' || lugarNacimiento === '' || fechaNacimiento === '' || domicilio  === '' || ocupacion === ''|| religion === '' || celular === '' || correo === ''
    || numeroEmergencia === '' || motivoConsulta === ''
    ){
        console.log('Estan vacios')
        mostrarAlerta('Todos los campos son obligatorios', true);
        return; //Corta la ejecucion del codigo
    }
})


function leerTexto(e){
    datos[e.target.id] = e.target.value;
    console.log(datos);
}

function mostrarAlerta(mensaje, error = null){
    const alerta = document.createElement('P');
    alerta.textContent = mensaje;
    alerta.style.transition = 'background-color 1s ease'
    if(error){ 
        alerta.classList.add('error');
    }else{
        alerta.classList.add('alerta');
    }

    formulario.appendChild(alerta);

    setTimeout(() => {
        alerta
        alerta.remove();
    }, 5000);
}