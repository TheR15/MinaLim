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

<?php
    require './includes/database.php';
    $db = conectarDB();

?>

<body class="fondo">
    <?php
    include './includes/templates/header.php';
    ?>
    
    <section class="contenedor-agenda">
        <div>
            <h1 class="titulo-agenda">Agenda</h1>
        </div>



        <table class="tabla">
            <thead>
                <tr>
                        <th scope="col">Nombre del cliente</th>
                        <th scope="col">Tipo de servicio</th>
                        <th scope="col">Numero de telefono</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estado de la cita</th>
                        <th scope="col">Acciones</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">Rodrigo Chavez Gonzalez</th>
                <td>Tratamiento Corporal</td>
                <td>4591163666</td>
                <td>22/05/2024</td>
                <td>Activo</td>
                <td>
                    <button class="boton-editar"> <img src="img/EditarInfo.png" alt=""></button>
                    <button class="boton-fecha"> <img src="img/EditarFecha.png"></button>
                    <button class="boton-cancelar"> <img src="img/Cancelar.png"></button>
                </td>
              </tr>

            </tbody>
          </table>
          
    </section>


    <script src="js/scripts.js"></script>
</body>
</html>
