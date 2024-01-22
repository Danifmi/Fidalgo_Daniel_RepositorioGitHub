<?php
session_start();
// Comprobamos si recibimos datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recogemos variables
    $nombre = isset($_REQUEST['nombre']) ? strtoupper($_REQUEST['nombre']) : null;
    $correo = isset($_REQUEST['correo']) ? $_REQUEST['correo'] : null;
    $contrasena = isset($_REQUEST['contrasena']) ? $_REQUEST['contrasena'] : null;

    // Datos de conexión a la base de datos
    $hostDB = '127.0.0.1';
    $nombreDB = 'abweb';
    $usuarioDB = 'root';
    $contrasenyaDB = 'Daniel$18052002';

    // Conecta con la base de datos
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

    // Verifica si el correo ya existe
    $consulta = $miPDO->prepare("SELECT * FROM usuarios WHERE correo = :correo");
    $consulta->execute(array('correo' => $correo));
    if ($consulta->rowCount() > 0) {
        // Usuario ya existe
        echo "<p>El correo ya está registrado. Por favor, intente con otro.</p>";
    } else {
        // Usuario no existe, procede a insertar
        $miInsertUsuarios = $miPDO->prepare('INSERT INTO usuarios (correo, nombre, contrasena) VALUES (:correo, :nombre, :contrasena)');
        $miInsertUsuarios->execute(
            array(
                'correo' => $correo,
                'nombre' => $nombre,
                'contrasena' => $contrasena,
            )
        );

        // Redireccionamos a la página de login
        header('Location: login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
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
    <form action="" method="post">
        <h2>Complete los siguientes campos para registrarse.</h2>
        <p>
            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" name="nombre" required>
        </p>
        <p>
            <label for="correo">Correo</label>
            <input id="correo" type="email" name="correo" required>
        </p>
        <p>
            <label for="contrasena">Contraseña</label>
            <input id="contrasena" type="password" name="contrasena" required>
        </p>
        <p>
            <input type="submit" value="Register">
        </p>
    </form>
</body>
</html>
