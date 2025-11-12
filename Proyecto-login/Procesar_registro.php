<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$file = fopen("usuarios.txt", "a");
fwrite($file, $usuario . ":" . password_hash($password, PASSWORD_DEFAULT) . "\n");
fclose($file);
echo "<h1>Usuario registrado correctamente</h1>";
echo '<img src="https://pa1.aminoapps.com/6581/5734857893bb18261d7a4ca15584994143b02554_hq.gif" width="250">';
echo "<p><a href='login.php'>Iniciar sesión</a></p>";