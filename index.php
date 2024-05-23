<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,-25" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">

    <title>Mina Lim</title>
</head>


<body class="contenedor">

    <div class="fondo-imagen">
        <div class="header">
        <h1 class="titulo">Mina Lim <span class="titulo_span" >Beauty SPA</span></h1>
        </div>
        <form method="post" class="login" action="index.html">
            <h2>Iniciar sesion</h1>
                <div class="campos_login">
                    <div class="icono_login">
                        <input type="text" placeholder="Usuario" id="fname" name="usuario"><br><br>
                    </div>

                    <div class="icono_login">
                    <input type="password" placeholder="Contraseña" id="lname" name="password"><br><br>

                    </div>    
                    <a name="btnIngresar" class="boton" href="#">Ingresar</a>
                </div>
        </form>
        <?php
    include("database.php");
    include("usuario.php");
    ?>
    </div>

</body>
</html>