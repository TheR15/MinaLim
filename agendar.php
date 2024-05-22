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
        <form class="formulario">
                <fieldset>
                    <legend>Agendar Cita</legend>
                    <label for="username">Nombre y Apellidos:</label>
                    <input id="nombre" name="username" type="text" placeholder="Ingrese el nombre y apellidos"/>

                    <label for="username">Edad: </label>
                    <input id="edad" name="username" type="number" placeholder="Ingrese la edad"/>
                    
                    <label for="username">Lugar de Nacimiento:</label>
                    <input id="lugarNacimiento" name="username" type="text" placeholder="Ingrese el lugar de nacimiento" />

                    <label for="username">Fecha de Nacimiento:</label>
                    <input id="fechaNacimiento" name="username" type="date" />
                    
                    <label for="username">Sexo:</label>
                    <select name="genero" id="genero-combobox">
                        <option value="">--Selecciona el genero--</option>
                        <option value="mujer">Mujer</option>
                        <option value="hombre">Hombre</option>
                        <option value="otro">Otro</option>
                    </select>
                    <label for="username">Estado Civil</label>
                    <select name="estado-civil" id="estado-civil-combobox">
                        <option value="">--Selecciona el Estado Civil--</option>
                        <option value="soltero">Soltera/o</option>
                        <option value="casado">Casada/o</option>
                        <option value="divorciado">Divorciada/o</option>
                        <option value="viudo">Viuda/o</option>
                        <option value="otro-estado-civil">Otro</option>
                    </select>
                    
                    <label for="username">Grupo/RH:</label>
                    <select name="lgrupo/rh" id="grupo/rh-combobox">
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
                    <input id="domicilio" name="username" type="text" placeholder="Ingrese el domicilio"/>
                    
                    <label for="username">Ocupacion:</label>
                    <input id="ocupacion" name="username" type="text" placeholder="Ingrese la ocupacion"/>

                    <label for="username">Religion:</label>
                    <input id="religion" name="username" type="text" placeholder="Ingrese la religion" />
                    
                    <label for="username">Celular:</label>
                    <input id="celular" name="username" type="number" placeholder="Ingrese el numero telefonico"/>

                    <label for="username">Correo:</label>
                    <input id="correo" name="username" type="email" placeholder="Ingrese su correo electronico"/>

                    <label for="username">Numero de Emergencia:</label>
                    <input id="numeroEmergencia" name="username" type="number" placeholder="Ingrese un numero telefonico de emergencia"/>

                    <label for="username">Motivo de Consulta:</label>
                    <textarea name="" id="motivoConsulta" placeholder="Ingrese el motivo de consulta"></textarea>

                    <input type="submit" value="Enviar" class="boton-formulario">
                </fieldset>
        </form>
    </section>
    <script src="js/scripts.js"></script>
</body>
</html>