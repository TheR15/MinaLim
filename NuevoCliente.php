

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,-25" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Agendar Cita</title>
    
</head>
<body class="fondo">
    
<?php
        require './includes/database.php';
        include './includes/templates/header.php';
        
        $db = conectarDB();

        //Arreglo con mensajes de errores
        $errores = [];

        $nombreApellidos = '';
        $edad = '';
        $lugarNacimiento= '';
        $fechaNacimiento = '';
        $sexo ='';
        $estadoCivil = '';
        $grupoRH = '';
        $domicilio = '';
        $ocupacion= '';
        $religion = '';
        $celular = '';
        $correo = '';
        $numeroEmergencia = '';
        $motivoConsulta = '';

        //Ejecutar el codigo despues de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //echo "<pre>";
            //var_dump($_POST);
            //echo "</pre>";

            //mysqli_real_escape_string Seguridad para los inputs

            $nombreApellidos = mysqli_real_escape_string ( $db, $_POST['nombreApellidos']);
            $edad = mysqli_real_escape_string ( $db, $_POST['edad']);
            $lugarNacimiento=mysqli_real_escape_string ( $db,   $_POST['lugarNacimiento']);
            $fechaNacimiento = mysqli_real_escape_string ( $db, $_POST['fechaNacimiento']);
            $sexo = mysqli_real_escape_string ( $db,    $_POST['sexo']);
            $estadoCivil =mysqli_real_escape_string ( $db,   $_POST['estadoCivil']);
            $grupoRH = mysqli_real_escape_string ( $db, $_POST['grupoRH']);
            $domicilio = mysqli_real_escape_string ( $db,   $_POST['domicilio']);
            $ocupacion= mysqli_real_escape_string ( $db,    $_POST['ocupacion']);
            $religion = mysqli_real_escape_string ( $db,    $_POST['religion']);
            $celular = mysqli_real_escape_string ( $db, $_POST['celular']);
            $correo =mysqli_real_escape_string ( $db,    $_POST['correo']);
            $numeroEmergencia = mysqli_real_escape_string ( $db,    $_POST['numeroEmergencia']);
            $motivoConsulta = mysqli_real_escape_string ( $db,  $_POST['motivoConsulta']);

            if(!$nombreApellidos){
                $errores[] = "El nombre y apellidos son obligatorios";
            }

            if(!$edad){
                $errores[] = "La edad es obligatoria";
            }

            if(!$lugarNacimiento){
                $errores[] = "El lugar de nacimiento es obligatorio";
            }

            if(!$fechaNacimiento){
                $errores[] = "la fecha de Nacimiento es obligatoria";
            }

            if(!$sexo){
                $errores[] = "El genero es obligatorio";
            }

            if(!$estadoCivil){
                $errores[] = "El estado civil es obligatorio";
            }
            if(!$grupoRH){
                $errores[] = "El grupo R/H es obligatorio";
            }
            if(!$domicilio){
                $errores[] = "El domicilio es obligatorio";
            }
            if(!$ocupacion){
                $errores[] = "La ocupacion es obligatoria";
            }
            if(!$religion){
                $errores[] = "La religion es obligatoria";
            }

            if(!$celular){
                $errores[] = "El numero de celular es obligatorio";
            }
            if(!$correo){
                $errores[] = "El correo electronico es obligatorio";
            }
            if(!$numeroEmergencia){
                $errores[] = "El numero de emergencia es obligatorio";
            }
            if(!$motivoConsulta){
                $errores[] = "El motivo de consulta es obligatorio";
            }

            
            //echo "<pre>";
            //var_dump($errores);
            //echo "</pre>";

            //Revisar que el arreglo de errores este vacio
            if(empty($errores)){
                //Insertar en la base de datos
                $query = "INSERT INTO cliente (nombreApellidos,edad,lugarNacimiento,fechaNacimiento,
                sexo,estadoCivil,grupoRH,domicilio,ocupacion,religion,celular,correo,numEmergencia,motivoConsulta)
                VALUES ( '$nombreApellidos','$edad','$lugarNacimiento','$fechaNacimiento','$sexo',
                '$estadoCivil','$grupoRH','$domicilio','$ocupacion','$religion','$celular','$correo',
                '$numeroEmergencia','$motivoConsulta' );";
    
                //echo  $query;

                $resultado = mysqli_query($db, $query);

                if($resultado){
                    //Redireccionar al usuario
                    header('Location: /Servicios.php?resultado=1');
                }
            }
    }
?>

    <section class="contenedor-formulario">
        <h1>Registrar cliente</h1>

       
        <?php  foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario"  method = "POST" action="/NuevoCliente.php">
                <fieldset>
                    <legend>Formulario</legend>

                    <label for="username">Nombre y Apellidos:</label>
                    <input id="nombreApellidos"
                    name="nombreApellidos"
                    type="text"
                    placeholder="Ingrese el nombre y apellidos"
                    value="<?php echo $nombreApellidos; ?>"/>

                    <label for="username">Edad:</label>
                    <input id="edad"
                    name="edad"
                    type="number"
                    placeholder="Ingrese la edad"
                    min="1"
                    value="<?php echo $edad; ?>"/>
                    
                    <label for="username">Lugar de Nacimiento:</label>
                    <input id="lugarNacimiento"
                    name="lugarNacimiento"
                    type="text"
                    placeholder="Ingrese el lugar de nacimiento"
                    value="<?php echo $lugarNacimiento; ?>"/>

                    <label for="username">Fecha de Nacimiento:</label>
                    <input id="fechaNacimiento"
                    name="fechaNacimiento"
                    type="date"
                    value="<?php echo $fechaNacimiento; ?>"/>
                    
                    <label for="username">Sexo:</label>
                    <select name="sexo" id="genero-combobox" value= "<?php echo $sexo; ?>">
                        <option value="">--Selecciona el genero--</option>
                        <option value="F">Mujer</option>
                        <option value="M">Hombre</option>
                        <option value="O">Otro</option>
                    </select>
                    <label for="username">Estado Civil:</label>
                    <select name="estadoCivil" id="estado-civil-combobox" value = "<?php echo $estadoCivil; ?>">
                        <option value="">--Selecciona el Estado Civil--</option>
                        <option value="soltero">Soltera/o</option>
                        <option value="casado">Casada/o</option>
                        <option value="divorciado">Divorciada/o</option>
                        <option value="viudo">Viuda/o</option>
                        <option value="otro-estado-civil">Otro</option>
                    </select>
                    
                    <label for="username">Grupo/RH:</label>
                    <select name="grupoRH" id="grupo/rh-combobox" value = "<?php echo $grupoRH; ?>">
                        <option value="">--Selecciona el Grupo/RH--</option>
                        <option value="O-">O-</option>
                        <option value="O+">O+</option>
                        <option value="A-">A-</option>
                        <option value="A+">A+</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB+">AB+</option>
                    </select>
                    <label for="username">Domicilio:</label>
                    <input id="domicilio" name="domicilio" type="text" placeholder="Ingrese el domicilio" value="<?php echo $domicilio; ?>"/>
                    
                    <label for="username">Ocupacion:</label>
                    <input id="ocupacion" name="ocupacion" type="text" placeholder="Ingrese la ocupacion" value="<?php echo $ocupacion; ?>"/>

                    <label for="username">Religion:</label>
                    <input id="religion" name="religion" type="text" placeholder="Ingrese la religion" value="<?php echo $religion; ?>"/>
                    
                    <label for="username">Celular:</label>
                    <input id="celular" name="celular" type="number" placeholder="Ingrese el numero telefonico" value="<?php echo $celular; ?>"/>

                    <label for="username">Correo:</label>
                    <input id="correo" name="correo" type="email" placeholder="Ingrese su correo electronico" value="<?php echo $correo; ?>"/>

                    <label for="username">Numero de Emergencia:</label>
                    <input id="numeroEmergencia" name="numeroEmergencia" type="number" placeholder="Ingrese un numero telefonico de emergencia" value="<?php echo $numeroEmergencia; ?>"/>

                    <label for="username">Motivo de Consulta:</label>
                    <textarea name="motivoConsulta" id="motivoConsulta" placeholder="Ingrese el motivo de consulta"><?php echo $motivoConsulta; ?></textarea>
                </fieldset>
            <input type="submit" value="Guardar" class="boton-formulario">
        </form>
    </section>
</body>
</html>
