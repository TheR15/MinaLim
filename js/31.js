const boton = document.querySelector('#boton');

boton.addEventListener('click', () =>{
    Notification.requestPermission()
        .then(resultado => console.log (`El resultado es ${resultado}`))
})

if(Notification.permission == 'granted') {
    new Notification ('Esta es una Notificacion'), {
        icon: '/img/masaje.png',
        body: 'Mina Lim, El mejor SPA'
    }
}