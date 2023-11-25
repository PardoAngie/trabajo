<?php 
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '<script>
                    alert("Por favor debes iniciar sesión");
                    window.location= "index.php;</script>';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>
    <link rel="shortcut icon" href="imagen/ferre.png">
</head>
<body>
    <h1>Bienvenidos a mi pagina</h1>
    <a href="php/cerrar_sesion.php">Cerrar</a>
</body>
</html>