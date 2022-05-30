<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="diseño1.css">
    <title>Tu agenda</title>
</head>
<!--conexion a la base de datos-->
<?php 

$conexion= mysqli_connect("localhost","id16711206_nico","!ZN0@(}CdF}k@7Li","id16711206_crud") or DIE("Error");

// $server = "localhost";
// $user = "root";
// $pass = "";
//conexion del webhost

// $user = "id16711206_nico";
// $pass = "!ZN0@(}CdF}k@7Li";
// $db = "id16711206_crud";


// $conexion = mysqli_connect($server, $user, $pass,) or DIE("Error de Conexion");
// $dbb=mysqli_select_db($conexion, $db);
?>

<body>
    <!--formulario-->
    <div class="sidebar">
<div><a href="tabla.php">Ver Contactos</a></div>
<div></div>
<p class="tareas">Otras Tareas</p>
<div><a href="https://trabajouno.000webhostapp.com">Formulario</a></div>
<div><a href="https://trabajouno.000webhostapp.com/holywood/index.html">Holywood</a></div>
<div><a href="https://trabajouno.000webhostapp.com/slider/index.php">Slider</a></div>
</div>

<div class="body-text">
    <div class="form">
        <form class="formulario" action="tabla.php" method="post">
            <label class="label" for="user">Nombre del Contacto</label>
            <input type="text" name="contacto" id="user" placeholder="Ingrese el contacto" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="example@hotmail.com" required>
            <label for="num">Telefono</label>
            <input type="number" name="num" id="num" placeholder="Ingrese el numero">
            <input class="boto" type="submit" value="Agregar contacto" name="boto">
            
        </form>
    </div>



</div>
</body>

</html>