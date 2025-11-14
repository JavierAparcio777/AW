<?php  
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="estilos.css">
    
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?></h1>
    <p>Has iniciado sesión correctamente.</p>
    <p><a href="logout.php">Cerrar sesión</a></p>
    <img src="https://media3.giphy.com/media/v1.Y2lkPTZjMDliOTUyaDh4ZHZ2ZnJqbjRnODRzamE2ejdndTg5ajBmejV2dXZkdDYyMm5sNyZlcD12MV9zdGlja2Vyc19zZWFyY2gmY3Q9cw/wzTupMouLd3xfiusDC/giphy.gif" alt="¡Bienvenido!" width="150" height="150">
</body>
</html>