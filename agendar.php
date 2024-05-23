

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
    include './prueba.php';
?>

    <section class="contenedor-formulario">
        <form class="formulario"  method = "POST" action="/agendar.php">
                <fieldset>
                    <legend>Agendar Cita</legend>
                    <label for="username">Nombre y Apellidos:</label>
                    <input id="nombreApellidos" name="nombreApellidos" type="text" placeholder="Ingrese el nombre y apellidos"/>

                    <label for="username">Edad: </label>
                    <input id="edad" name="edad" type="number" placeholder="Ingrese la edad" min="1"/>
                    
                    <label for="username">Lugar de Nacimiento:</label>
                    <input id="lugarNacimiento" name="lugarNacimiento" type="text" placeholder="Ingrese el lugar de nacimiento" />

                    <label for="username">Fecha de Nacimiento:</label>
                    <input id="fechaNacimiento" name="fechaNacimiento" type="date" />
                    
                    <label for="username">Sexo:</label>
                    <select name="sexo" id="genero-combobox">
                        <option value="">--Selecciona el genero--</option>
                        <option value="mujer">Mujer</option>
                        <option value="hombre">Hombre</option>
                        <option value="otro">Otro</option>
                    </select>
                    <label for="username">Estado Civil</label>
                    <select name="estadoCivil" id="estado-civil-combobox">
                        <option value="">--Selecciona el Estado Civil--</option>
                        <option value="soltero">Soltera/o</option>
                        <option value="casado">Casada/o</option>
                        <option value="divorciado">Divorciada/o</option>
                        <option value="viudo">Viuda/o</option>
                        <option value="otro-estado-civil">Otro</option>
                    </select>
                    
                    <label for="username">Grupo/RH:</label>
                    <select name="grupoRH" id="grupo/rh-combobox">
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
                    <input id="domicilio" name="domicilio" type="text" placeholder="Ingrese el domicilio"/>
                    
                    <label for="username">Ocupacion:</label>
                    <input id="ocupacion" name="ocupacion" type="text" placeholder="Ingrese la ocupacion"/>

                    <label for="username">Religion:</label>
                    <input id="religion" name="religion" type="text" placeholder="Ingrese la religion" />
                    
                    <label for="username">Celular:</label>
                    <input id="celular" name="celular" type="number" placeholder="Ingrese el numero telefonico"/>

                    <label for="username">Correo:</label>
                    <input id="correo" name="correo" type="email" placeholder="Ingrese su correo electronico"/>

                    <label for="username">Numero de Emergencia:</label>
                    <input id="numeroEmergencia" name="numeroEmergencia" type="number" placeholder="Ingrese un numero telefonico de emergencia"/>

                    <label for="username">Motivo de Consulta:</label>
                    <textarea name="motivoConsulta" id="motivoConsulta" placeholder="Ingrese el motivo de consulta"></textarea>
                </fieldset>
            <input type="submit" value="Enviar" class="boton-formulario">
        </form>
    </section>
</body>
</html>
