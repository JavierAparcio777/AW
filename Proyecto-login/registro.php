<!DOCTYPE html>
<html lang="es">
<head>
       <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpMtvA4EP-crnVDl_gZTN3Gvvtp-n6lknKA&s">
   <meta charset="UTF-8">
   <title>Registro de usuario</title>
   <link rel="stylesheet" href="estilos.css">
   <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        flex-direction: column;
    }
    
    form {
        background: #f5f5f5;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
</style>
</head>
<body>
   <h1>Registro</h1>
   <form action="Procesar_registro.php" method="post">
    <label>Usuario:</label>
    <input type="text" name="usuario" required><br><br>
    <label>Contraseña:</label>
    <input type="password" name="password" required><br><br>
    <button type="submit">Registrarse</button>
</form>
<p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
</body>
</html>