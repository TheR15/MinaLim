<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,-25" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="fondo">
    <section>
        <div class="contenedor-menu">
            <?php if (intval($resultado) === 1) : ?>
                <p class="alerta exito">Cliente registrado correctamente</p>
            <?php endif; ?>

            <?php
            include './includes/templates/header.php';
            $resultado = $_GET['resultado' ?? null];
            require './includes/database.php';
            $db = conectarDB();
            $errores = [];

            //Consultar para obtener los clientes  

            $consulta = "SELECT * FROM cliente;";
            $resultado = mysqli_query($db, $consulta);

            $motivoConsulta = '';
            $fechaCita = '';
            $IdCliente = '';
            $servicio = '';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo "<pre>";
                var_dump($_POST);
                echo "</pre>";

                //mysqli_real_escape_string Seguridad para los inputs
                $servicio = mysqli_real_escape_string($db, $_POST['servicio']);
                $motivoConsulta = mysqli_real_escape_string($db, $_POST['motivoConsulta']);
                $fechaCita = mysqli_real_escape_string($db, $_POST['fechaCita']);
                $IdCliente = mysqli_real_escape_string($db, $_POST['cliente']);


                if (!$motivoConsulta) {
                    $errores[] = "El motivo de consulta es obligatorio";
                }

                if (!$fechaCita) {
                    $errores[] = "Introduzca la fecha de la cita";
                }

                //echo "<pre>";
                //var_dump($errores);
                //echo "</pre>";
                //Revisar que el arreglo de errores este vacio

                if (empty($errores)) {
                    //Insertar en la base de datos

                    $query = "INSERT INTO citas (tipoServicio, servicio, fechaCita, motivoConsulta, idCliente)
                VALUES ( '$prueba','$servicio','$fechaCita', '$motivoConsulta', '$IdCliente');";

                    echo  $query;

                    $resultado = mysqli_query($db, $query);

                    echo  $resultado;

                    if ($resultado) {
                        //Redireccionar al usuario
                        header('Location: /Servicios.php');
                    }
                }
            }
            ?>
            <form method="POST" action="/Servicios.php">
                <div class="contenedor-tratamientos">
                    <div class="Faciales">
                        <div class="contenido-faciales">
                            <li class="texto-trat lista-Main">Tratamientos Faciales
                                <ul class="listas">
                                    <select class="select-servicios boton-servicios" name="servicio">
                                        <option class="select-ss" value="">--Selecciona el tipo de servicio--</option>
                                        <option  class="select-ss"value="Control Acne">Control Acne</option>
                                        <option  class="select-ss"value="Control de grasa">Control de grasa</option>
                                        <option  class="select-ss"value="Limpiza profunda">Limpiza profunda</option>
                                        <option  class="select-ss"value="Despigmentante">Despigmentante</option>
                                        <option  class="select-ss"value="Anti-Envejecimiento">Anti-Envejecimiento</option>
                                        <option  class="select-ss"value="Desensibilizante">Desensibilizante</option>
                                        <option  class="select-ss"value="Hidratacion Profunda">Hidratacion Profunda</option>
                                        <option  class="select-ss"value="Perfilamiento de rostro">Perfilamiento de rostro</option>
                                        <option  class="select-ss"value="Microdermoabrasion">Microdermoabrasion</option>
                                        <option  class="select-ss"value="Rejuvenecimiento Facial">Rejuvenecimiento Facial</option>
                                        <option  class="select-ss"value="Dermapen">Dermapen</option>
                                        <option value="Plasmagen/Verrugas">Plasmagen/Verrugas</option>
                                    </select>
                                </ul>
                            </li>
                        </div>
                    </div>

                    <div class="Corporales">
                        <div class="contenido-corporales">
                            <li class="texto-trat lista-Main">Tratamientos Corporales
                                <ul class="listas">
                                    <div class="grid-corporales">
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-azul" type="submit" value="Reductivo"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-azul" type="submit" value="Reafirmante"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-azul" type="submit" value="Anticelulitico"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-azul" type="submit" value="Levantamiento de Gluteos"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-azul" type="submit" value="Post-Quirurgico"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-azul" type="submit" value="Exfolacion Corporal"></a></li>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </div>

                    <div class="Belleza">
                        <div class="contenido-belleza">
                            <li class="texto-trat lista-Main">Belleza
                                <ul class="listas">
                                    <div>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-rojo" type="submit" value="Lifting de pestañas"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-rojo" type="submit" value="Planchado de ceja"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-rojo" type="submit" value="Depilacion de cera española"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-rojo" type="submit" value="Pedicure-Manicure"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-rojo" type="submit" value="Uñas-Gel"></a></li>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </div>

                    <div class="Masajes">
                        <div class="contenido-masajes">
                            <li class="texto-trat lista-Main blanco">Masajes
                                <ul class="listas">
                                    <div>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-masajes" type="submit" value="Masaje Relajante"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-masajes" type="submit" value="Velo de Novia"></a></li>
                                        <li><a onclick="scrollToSection('section2')"><input class="boton-servicios-masajes" type="submit" value="Drenaje Linfatico"></a></li>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </div>
                </div>
    </section>

    <script src="/js/section.js"></script>

    <div class="contenedor-agendar">

        <section id='section2' class="contenedor-formulario formulario">
            <h1>Agendar cita</h1>

            <?php foreach ($errores as $error) : ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>



            <fieldset>

                <legend></legend>

                <label for="username">Nombre del cliente:</label>
                <select class="select-clientes" name="cliente">
                    <option value="">--Seleccione un cliente--</option>
                    <?php while ($cliente = mysqli_fetch_assoc($resultado)) : ?>
                        <option <?php echo $IdCliente === $cliente['idCliente'] ? 'selected' : ''; ?> value="<?php echo $cliente['idCliente']; ?>"><?php echo $cliente['nombreApellidos']; ?></option>
                    <?php endwhile; ?>
                </select>

                <label for="username">Motivo de Consulta:</label>
                <textarea name="motivoConsulta" id="motivoConsulta" placeholder="Ingrese el motivo de consulta"><?php echo $motivoConsulta; ?></textarea>

                <label for="username">Fecha de la cita</label>
                <input id="fechaCita" name="fechaCita" type="date" placeholder="Seleccione la fecha de la cita" value="<?php echo $fechaCita; ?>" />

            </fieldset>
            <input type="submit" value="Agendar cita" class="boton-formulario">
            </form>
        </section>
    </div>
    </div>
    </header>
</body>

</html>