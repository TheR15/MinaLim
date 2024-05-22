

const metodoPago = 'Efectivo';

 switch (metodoPago) {
    case 'Tarjeta':
        console.log('Pagaste con targeta');
        break;
    case 'Efectivo':
        console.log('Pagaste con Efectivo');
        break;
    case 'Cheque':
        console.log('Pagaste con Cheque');
        break;
    default:
        console.log('Aun no has pagado');
        break;
 }