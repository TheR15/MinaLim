//Async / await

function descargarNuevosClientes(){
    return new Promise ( resolve => {
        console.log('Descargando clientes... espere...')

        setTimeout(() => {
            resolve ('Los clientes fueron descargados')
        }, 5000)
    })
}

function descargarNuevosPedidos(){
    return new Promise ( resolve => {
        console.log('Descargando Pedidos... espere...')

        setTimeout(() => {
            resolve ('Los Pedidos fueron descargados')
        }, 5000)
    })
}

async function app(){
    try {
        //const resultado = await descargarNuevosClientes();//El codigo que este despues de esta linea no se ejecutara hasta que esta termine
        //console.log(resultado)

        const resultado = await Promise.all([descargarNuevosClientes(),descargarNuevosPedidos()])
        console.log(resultado[0]);
        console.log(resultado[1]);
    } catch (error) {
        console.log(error);
    }
}



app();