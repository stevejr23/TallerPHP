<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller de PHP</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
    <header class="Cabecera">
        <h2>Formulario de registro para el evento de ingenieria de software de la UTPL 2021</h2>
        <h3>El evento tiene un precio de $50</h3>
    </header>

    <form id="formulario" method="post" action="registro.php">
        <input type="text" name="nombre" placeholder="Ingrese sus nombres" require><br>
        <input type="text" name="apellido" placeholder="Ingrese sus apellidos" require><br>
        <input type="number" name="edad" placeholder="Ingrese sus edad" require><br>
        <input type="text" name="cedula" placeholder="Ingrese sus cedula" require><br>
        <input type="text" name="correo" placeholder="Ingrese su correo" require><br>
        
        <select name="inscrito">
 		<option value="">---Tipo Inscrito---</option>
  		<option value="DocenteUTPL">DocenteUTPL</option>
  		<option value="EstudianteUTPL" >EstudianteUTPL</option>
  		<option value="UsuarioIndependiente">UsuarioIndependiente</option>
		</select>

        <span><br> Cursos Disponibles:</span><br>
        <input type="checkbox" name="curso[]" value="Python">
        <label for="vehicle1"> Python $150 </label><br>
        <input type="checkbox" name="curso[]" value="Java">
        <label for="vehicle2"> Java $180 </label><br>
        <input type="checkbox" name="curso[]" value="Kotlin">
        <label for="vehicle3"> Kotlin $140 </label><br> 

        <input type="submit" value="Registro" name="submit">
    </form>

</body>

</html>