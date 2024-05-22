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
    <div class="contenedor-menu">
        <div class="barra">
                <h1 class="titulo centrar-texto">MinaLim<span class="logo__bold titulo_span">Beauty Spa</span></h1>
                <nav class="navegacion">
                <div class="barra-nav">
                    <a href="nosotros.html" class="navegacion__enlace">Agenda</a>
                    <a href="cursos.html" class="navegacion__enlace">Expediente Clinico</a>
                    <a href="contacto.html" class="navegacion__enlace">Salir</a>
                </div>
            </nav>
        </div>
    </div>
    
    <section class="contenedor-formulario">
        <form method="post">
            <div class="formulario">
                <fieldset>
                <legend>Agendar Cita</legend>
                <label for="username">Nombre y Apellidos:</label>
                <input id="username" name="username" type="text" />
                <label for="username">Edad: </label>
                <input id="username" name="username" type="number" />
                
                <label for="username">Lugar de Nacimiento:</label>
                <input id="username" name="username" type="text" />
                <label for="username">Fecha de Nacimiento:</label>
                <input id="username" name="username" type="date" />
                
                <label for="username">Sexo:</label>
                <input id="username" name="username" type="text" />
                <label for="username">Estado Civil</label>
                <input id="username" name="username" type="text" />
                
                <label for="username">Grupo/RH:</label>
                <input id="username" name="username" type="text" />
                <label for="username">Domicilio:</label>
                <input id="username" name="username" type="text" />
                
                <label for="username">Ocupacion:</label>
                <input id="username" name="username" type="text" />
                <label for="username">Religion:</label>
                <input id="username" name="username" type="number" />
                
                <label for="username">Celular:</label>
                <input id="username" name="username" type="number" />
                <label for="username">Correo:</label>
                <input id="username" name="username" type="email" />
                <label for="username">Numero de Emergencia:</label>
                <input id="username" name="username" type="number" />
                <label for="username">Motivo de Consulta:</label>
                <textarea name="" id=""></textarea>
                <input class= "boton-formulario" type="submit">
            </fieldset>
            </div>
        </form>
    </section>
</body>
</html>
