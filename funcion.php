<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>



    <?php
    if (isset($_GET['Modificar'])) {
        $modificar_id = $_GET['Modificar'];

        $consulta = "SELECT * FROM contactos WHERE Id='$modificar_id'";
        $ejecutar = mysqli_query($conexion, $consulta);

        $fila = mysqli_fetch_array($ejecutar);
        $contacto = $fila['Contacto'];
        $email = $fila['Email'];
        $numero = $fila['Numero'];
    }
    ?>
    <div class="form">
        <form class="formulario" action="" method="post">
            <input class="label" type="text" name="contacto" value=<?php echo $contacto ?> required>
            <input type="text" name="email" value=<?php echo $email ?> required>
            <input type="text" name="numero" value=<?php echo $numero ?> required>
            <input class="boto" type="submit" name="boton" value="Modificar">

        </form>
    </div>
    <?php
    if (isset($_POST['boton'])) {


        $update_contacto = $_POST['contacto'];
        $update_email = $_POST['email'];
        $update_numero = $_POST['numero'];

        $actualizar = "UPDATE contactos SET Contacto='$update_contacto', Email='$update_email', Numero='$update_numero' WHERE id='$modificar_id'";

        $ejecutar = mysqli_query($conexion, $actualizar);

        if ($ejecutar) {
            echo "<script>alert('Datos actualizados con exito')</script>";
            echo "<script>window.open('tabla.php')</script>";
            echo "<script>window.close('tabla.php')</script>";
        }
    }
    ?>

</body>

</html>