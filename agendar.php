
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
    <title>Document</title>
</head>
<body>
    <?php
        require './includes/database.php';
        include './includes/templates/header.php';
        $db = conectarDB();
        $errores = [];

        //Consultar para obtener los clientes  

        $consulta = "SELECT * FROM cliente;";
        $resultado = mysqli_query($db,$consulta);

        $motivoConsulta = '';
        $fechaCita = '';
        $IdCliente = '';

        $servicio = $_GET['servicio' ?? null];
        $tipoServicio = $_GET['tipoServicio' ?? null];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            echo "<pre>";
            var_dump($_POST);
            echo "</pre>";

            //mysqli_real_escape_string Seguridad para los inputs

            $motivoConsulta = mysqli_real_escape_string ( $db, $_POST['motivoConsulta']);
            $fechaCita = mysqli_real_escape_string ( $db, $_POST['fechaCita']);
            $IdCliente = mysqli_real_escape_string ( $db, $_POST['cliente']);

            if(!$motivoConsulta){
                $errores[] = "El motivo de consulta es obligatorio";
            }

            if(!$fechaCita){
                $errores[] = "Introduzca la fecha de la cita";
            }

            
            //echo "<pre>";
            //var_dump($errores);
            //echo "</pre>";
            //Revisar que el arreglo de errores este vacio
            echo $tipoServicioRes;
            if(empty($errores)){
                //Insertar en la base de datos

                $query = "INSERT INTO servicios (motivoConsulta)
                VALUES ('" . $motivoConsulta . "');";

                $queryCita = "INSERT INTO citas (fechaCita, idCliente)
                VALUES ( '$fechaCita','$cliente');";
    
                echo  $query;

                $resultado = mysqli_query($db, $query);
                $resultadoCita = mysqli_query($db, $queryCita);

                if($resultado){
                    //Redireccionar al usuario
                    header('Location: /agenda.php?resultado=1');
                }
            }
        }

    ?>

    <section class="contenedor-formulario">
        <h1>Agendar cita</h1>
       
        <?php  foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario"  method = "POST" action="/agendar.php">
                <fieldset>

                    
                    <legend>Servicio: <?php echo$servicio?></legend>

                    <label for="username">Nombre del cliente:</label>
                    <select class ="select-clientes" name="cliente" >
                        <option value="">--Seleccione un cliente--</option>
                        <?php while($cliente = mysqli_fetch_assoc($resultado)): ?>
                            <option <?php echo $IdCliente === $cliente['idCliente'] ? 'selected' : '';?>   value="<?php echo $cliente['idCliente']; ?>" ><?php echo $cliente ['nombreApellidos'];?></option>
                        <?php endwhile;?>
                    </select>
                    
                    <label for="username">Motivo de Consulta:</label>
                    <textarea name="motivoConsulta"
                    id="motivoConsulta"
                    placeholder="Ingrese el motivo de consulta"><?php echo $motivoConsulta; ?></textarea>

                    <label for="username">Fecha de la cita</label>
                    <input id="fechaCita"
                    name="fechaCita"
                    type="date"
                    placeholder="Seleccione la fecha de la cita"
                    value="<?php echo $fechaCita; ?>"/>

                </fieldset>
            <input type="submit" value="Agendar cita" class="boton-formulario">
        </form>
    </section>

</body>
</html>