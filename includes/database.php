<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost','root','11721266','spa');
    if(!$db){
        echo "Hubo un error";
        exit;
    }
    return $db;
}

