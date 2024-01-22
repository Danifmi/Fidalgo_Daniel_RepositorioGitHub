<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    if (!empty($correo) && !empty($contrasena)) {
        // Prepara la sentencia SQL para evitar inyecciones SQL
        $stmt = $miPDO->prepare("SELECT * FROM usuarios WHERE correo = :correo");
        $stmt->bindParam(':correo', $correo);

        $stmt->execute();
        
        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($contrasena == $usuario['contrasena']) {
                // Credenciales correctas, iniciar sesión
                $_SESSION['usuario_id'] = $usuario['idusuarios'];
                $_SESSION['usuario_nombre'] = $usuario['nombre'];
                // Redirige al usuario a su perfil o a la página principal
                header("location: ../index.php");
                exit;
            } else {
                // Contraseña incorrecta
                $error_login = "La contraseña ingresada no es válida.";
            }
        } else {
            // No existe usuario con ese correo
            $error_login = "No se encontró cuenta con ese correo.";
        }
    } else {
        $error_login = "Por favor ingrese correo y contraseña.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/login.css">
    <style>
        @font-face {
            font-family: 'Gótica';
            src: url('../css/GrenzeGotisch-VariableFont_wght.ttf') format(truetype);
        }
        *{
            font-family: 'Gótica';
        }
        
    </style>
</head>

<body>
    <header>
        <div class="titulo">
            <img class="titulo__logo" src="../img/InspoTatu_LOGO.png" alt="logo tatu">
            <h1>InspoTatu</h1>
            <img class="titulo__logo" src="../img/InspoTatu_LOGO.png" alt="logo tatu">
        </div>

    </header>
    <main>
        <div class="login_tit">
        <h2>Iniciar sesión</h2>
        </div>
        <form action="../php_iniciosesion/login.php" method="post">
            <label for="correo">Usuario:</label>
            <input type="text" id="correo" name="correo" required><br>

            <label for="contrasena">Contraseña:</label>
            <input type="contrasena" id="contrasena" name="contrasena" required><br>

            <input type="submit" value="Iniciar sesión">
        </form>
        <div class="login_link">
        <a href="register.php">Registrarse</a>
        </div>
    </main>

</body>
</html>