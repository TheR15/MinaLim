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
    <?php
        include './includes/templates/header.php';
        $resultado = $_GET['resultado' ?? null];
    ?>

    <div class="contenedor-menu">
        <?php if(intval($resultado) === 1): ?>
            <p class="alerta exito">Cliente registrado correctamente</p>
        <?php  endif; ?>

        <div class="contenedor-tratamientos">
            <div class="Faciales">
                <div class="contenido-faciales">
                    <li class="texto-trat lista-Main">Tratamientos Faciales
                        <ul class="listas">
                            <li class="text-listas"><a href="/agendar.php?servicio=Control de Acne&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Control de Acne"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Control de Grasa&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Control de Grasa"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Limpieza Profunda&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Limpieza Profunda"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Despigmentante&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Despigmentante"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Anti-Envejecimiento&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Anti-Envejecimiento"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Desensibilizante&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Desensibilizante"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Hidratacion Profunda&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Hidratacion Profunda"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Perfilamiento de Rostro&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Perfilamiento de Rostro"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Microdermoabrasion&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Microdermoabrasion"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Rejuvenecimiento Facial&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Rejuvenecimiento Facial"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Dermapen&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Dermapen"></a></li>
                            <li class="text-listas"><a href="/agendar.php?servicio=Plasmapen/Verrugas&tipoServicio=faciales"><input class= "boton-servicios"type="submit" value="Plasmapen/Verrugas"></a></li>
                        </ul>
                    </li>
                </div>
            </div>

            <div class="Corporales">
                <div class="contenido-corporales">
                    <li class="texto-trat lista-Main">Tratamientos Corporales
                        <ul class="listas" >
                            <div class="grid-corporales">
                                <li ><a href="/agendar.php?servicio=Reductivo"><input class= "boton-servicios-azul"type="submit" value="Reductivo"></a></li>
                                <li ><a href="/agendar.php?servicio=Reafirmante"><input class= "boton-servicios-azul"type="submit" value="Reafirmante"></a></li>
                                <li ><a href="/agendar.php?servicio=Anticelulitico"><input class= "boton-servicios-azul"type="submit" value="Anticelulitico"></a></li>
                                <li ><a href="/agendar.php?servicio=Levantamiento de Gluteos"><input class= "boton-servicios-azul"type="submit" value="Levantamiento de Gluteos"></a></li>
                                <li ><a href="/agendar.php?servicio=Post-Quirurgico"><input class= "boton-servicios-azul"type="submit" value="Post-Quirurgico"></a></li>
                                <li ><a href="/agendar.php?servicio=Exfolacion Corporal"><input class= "boton-servicios-azul"type="submit" value="Exfolacion Corporal"></a></li>
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
                                <li><a href="/agendar.php?servicio=Lifting de pestañas"><input class= "boton-servicios-rojo"type="submit" value="Lifting de pestañas"></a></li>
                                <li><a href="/agendar.php?servicio=Planchado de ceja"><input class= "boton-servicios-rojo"type="submit" value="Planchado de ceja"></a></li>
                                <li><a href="/agendar.php?servicio=Depilacion de cera española"><input class= "boton-servicios-rojo"type="submit" value="Depilacion de cera española"></a></li>
                                <li><a href="/agendar.php?servicio=Pedicure-Manicure"><input class= "boton-servicios-rojo"type="submit" value="Pedicure-Manicure"></a></li>
                                <li><a href="/agendar.php?servicio=Uñas-Gel"><input class= "boton-servicios-rojo"type="submit" value="Uñas-Gel"></a></li>
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
                                <li><a href="/agendar.php?servicio=Masaje Relajante"><input class= "boton-servicios-masajes"type="submit" value="Masaje Relajante"></a></li>
                                <li><a href="/agendar.php?servicio=Velo de Novia"><input class= "boton-servicios-masajes"type="submit" value="Velo de Novia"></a></li>
                                <li><a href="/agendar.php?servicio=Drenaje Linfatico"><input class= "boton-servicios-masajes"type="submit" value="Drenaje Linfatico"></a></li>
                            </div>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
</body>
</html>