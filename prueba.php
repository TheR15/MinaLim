<?php
        require './includes/database.php';
        include './includes/templates/header.php';
        
        $db = conectarDB();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            echo "<pre>";
            var_dump($_POST);
            echo "</pre>";


            $nombreApellidos = $_POST['nombreApellidos'];
            $edad = $_POST['edad'];
            $lugarNacimiento= $_POST['lugarNacimiento'];
            $fechaNacimiento = $_POST['fechaNacimiento'];
            $sexo = $_POST['sexo'];
            $estadoCivil = $_POST['estadoCivil'];
            $grupoRH = $_POST['grupoRH'];
            $domicilio = $_POST['domicilio'];
            $ocupacion= $_POST['ocupacion'];
            $religion = $_POST['religion'];
            $celular = $_POST['celular'];
            $correo = $_POST['correo'];
            $numeroEmergencia = $_POST['numeroEmergencia'];
            $motivoConsulta = $_POST['motivoConsulta'];
            
            //Insertar en la base de datos

            $query = "INSERT INTO cliente (nombreApellidos,edad,lugarNacimiento,fechaNacimiento,
            sexo,estadoCivil,grupoRH,domicilio,ocupacion,religion,celular,correo,numEmergencia,motivoConsulta)
            VALUES ( '$nombreApellidos','$edad','$lugarNacimiento','$fechaNacimiento','$sexo',
            '$estadoCivil','$grupoRH','$domicilio','$ocupacion','$religion','$celular','$correo',
            '$numeroEmergencia','$motivoConsulta' );";

            echo  $query;

            $resultado = mysqli_query($db, $query);
        }
