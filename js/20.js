const reproductor = {
    reproducir : function(id){
        console.log(`Reproducioendo la Cancion con el ID ${id}`)
    },
    pausar : function(){
        console.log(`Pausando...`)
    },
    CreandoPlaylist : function(nombre){
        console.log(`Creando la playlist con el nombre ${nombre}`)
    },
    ReproduciendoPlaylist : function(nombre){
        console.log(`Reproduciendo la playlist con el nombre ${nombre}`)
    }
}
reproductor.borrarCancion = function(id){
    console.log(`Eliminando la cancion ${id}`)
}

reproductor.reproducir(100);
reproductor.pausar();
reproductor.borrarCancion(54);
reproductor.CreandoPlaylist(`Corridos Tumbados`);
reproductor.ReproduciendoPlaylist(`Corridos Tumbados`);

