<?php

function obtener_servicio(){
    try{
        // Importar las credenciales
        require 'database.php'
        // Consulta SQL
        $sql = "SELECT * FROM clientes;";

        // Realizar la consulta
        $consulta = mysqli_query($db,$sql)
        // Acceder a los resultados
        

        // Cerrar la conexion

    } catch(\Throwable $th) {
        var_dump($th)
    }
}