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
    <link href="/website/css/uicons-bold-rounded.css" rel="stylesheet">
    <title>Agendar Cita</title>

</head>
<body class="fondo">
<?php
    //Importar la conexion
    require './includes/database.php';
    $db = conectarDB();

    //Escribir el Query
    $query = "SELECT * FROM cliente";

    //Consultar la BD
    $resultado = mysqli_query($db, $query);


    //Incluye el template

    include './includes/templates/header.php';
?>
    
    <section >
        <div class="contenedor-agenda">
            <h1>Agenda</h1>

                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Nombre del cliente</th>
                            <th>Tipo de servicio</th>
                            <th>Numero de telefono</th>
                            <th>Fecha</th>
                            <th>Estado de la cita</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($cliente = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td><?php echo $cliente['nombreApellidos']; ?></td>
                        <td><?php echo $cliente['idCliente']; ?></td>
                        <td><?php echo $cliente['celular']; ?></td>
                        <td><?php echo $cliente['idCliente']; ?></td>
                        <td><?php echo $cliente['idCliente']; ?></td>
                        <td class="acciones">
                            <button class="boton-editar"> <img src="img/EditarInfo.png" alt=""></button>
                            <button class="boton-fecha"> <img src="img/EditarFecha.png"></button>
                            <button class="boton-cancelar"> <img src="img/Cancelar.png"></button>
                        </td>
                    </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
          </div>
    </section>


    <script src="js/scripts.js"></script>
</body>
</html>
