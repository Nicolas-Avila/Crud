<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="stylesheet" href="diseño1.css">
</head>

<body>

    <?php 


$conexion= mysqli_connect("localhost","id16711206_nico","!ZN0@(}CdF}k@7Li","id16711206_crud") or DIE("Error");

    // $server = "localhost";
    // $user = "root";
    // $pass = "";

    
    // $user = "id16711206_nico";
    // $pass = "!ZN0@(}CdF}k@7Li";

    // $conexion = mysqli_connect($server, $user, $pass,) or DIE("Error de Conexion");
    // $db = mysqli_select_db($conexion, "id16711206_crud");
    ?>

<div class="sidebar">
<div><a href="index.php">Agregar contacto</a></div>
<div></div>
<p class="tareas">Otras Tareas</p>
<div><a href="https://trabajouno.000webhostapp.com">Formulario</a></div>
<div><a href="https://trabajouno.000webhostapp.com/holywood/index.html">Holywood</a></div>
<div><a href="https://trabajouno.000webhostapp.com/slider/index.php">Slider</a></div>
</div>

<div class="body-text">


    <!--agregar los contactos-->
    <?php

    if (isset($_POST["boto"])) {
        $contacto = $_POST["contacto"];
        $email = $_POST["email"];
        $numero = $_POST["num"];

        $insert = "INSERT INTO contactos VALUES (null,'$contacto','$email','$numero')";
        $ejecutar = mysqli_query($conexion, $insert);
        if ($ejecutar) {
            echo "<script>alert('Contacto ingresado con exito')</script>";
        }
    }
    ?>

    <!--muestra los datos-->


    <div class="all-contactos">
        <?php
        $consulta = "SELECT * FROM contactos";
        $ejecutar = mysqli_query($conexion, $consulta);
        $i = 0;
        while ($fila = mysqli_fetch_array($ejecutar)) {
            $id = $fila['Id'];
            $contacto = $fila['Contacto'];
            $email = $fila['Email'];
            $numero = $fila['Numero'];
            $i++;

        ?>
            <p class="contacto"><?php echo $contacto; ?></p>
            <p class="contacto"><?php echo $email; ?></p>
            <p class="numero"><?php echo $numero; ?></p>
            <a class="editar" href="tabla.php?Modificar=<?php echo $id; ?>">Modificar</a>
            <a class="editar" href="tabla.php?Eliminar=<?php echo $id; ?>">Eliminar</a>
        <?php } ?>

    </div>

    <!--editar los contactor-->
    <?php
    if (isset($_GET['Modificar'])) {
        include("funcion.php");
    }
    ?>

    <!--borra los contacto-->
    <?php
    if (isset($_GET['Eliminar'])) {
        $borrar_id = $_GET['Eliminar'];
        $borrar = "DELETE FROM contactos WHERE Id='$borrar_id'";
        $ejecutar = mysqli_query($conexion, $borrar);

        if ($ejecutar) {
            echo "<script>alert('El contacto se borro con exito')</script>";
            echo "<script>window.open('tabla.php')</script>";
            echo "<script>window.close('tabla.php')</script>";
        }
    }


    ?>
</div>
</body>

</html>