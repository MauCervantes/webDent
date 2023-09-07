<?php
    session_start();
    // Validar si ya hay una sesion iniciada
    if(!isset($_SESSION['usr'])){
        header("Location: ../vista/html/login.php");
    }else{
        $usr_sesion = $_SESSION['usr']['nombre'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <center>
    <h1>Bienvenido <?php echo $usr_sesion ?> </h1>

    <a href=""><h3>Borrar usuario</h3></a>
    <a href=""><h3>Cerrar sesion</h3></a>
    </center>
</body>
</html>