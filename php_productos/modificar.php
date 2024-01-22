<?php
$hostDB = '127.0.0.1';
$nombreDB = 'abweb';
$usuarioDB = 'root';
$contrasenyaDB = 'Daniel$18052002';
$idproducto = isset($_REQUEST['idproducto']) ? $_REQUEST['idproducto'] : null;
$nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
$estilo = isset($_REQUEST['estilo']) ? $_REQUEST['estilo'] : null;
$tatuador = isset($_REQUEST['tatuador']) ? $_REQUEST['tatuador'] : null;
$precio = isset($_REQUEST['precio']) ? $_REQUEST['precio'] : null;

$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $miUpdate = $miPDO->prepare('UPDATE producto SET nombre = :nombre, estilo = :estilo, tatuador = :tatuador, precio = :precio WHERE idproducto = :idproducto');
    $miUpdate->execute([
        'idproducto' => $idproducto,
        'nombre' => $nombre,
        'estilo' => $estilo,
        'tatuador' => $tatuador,
        'precio' => $precio,
    ]);
    
    header('Location: ../pages/tienda.php');
} else {
    
    $miConsulta = $miPDO->prepare('SELECT * FROM producto WHERE idproducto = ?;');
    
    $miConsulta->execute([ $idproducto]);
}

$producto = $miConsulta->fetch();


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear - CRUD PHP</title>
    <link rel="stylesheet" href="../css/crearmod.css">
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
    <form method="post">
        <p>
            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" name="nombre" value="<?= $producto['nombre'] ?>">
        </p>
        <p>
            <label for="estilo">Estilo</label>
            <input id="estilo" type="text" name="estilo" value="<?= $producto['estilo'] ?>">
        </p>
        <p>
            <label for="tatuador">Tatuador</label>
            <input id="tatuador" type="text" name="tatuador" value="<?= $producto['tatuador'] ?>">
        </p>
        <p>
            <label for="precio">Precio</label>
            <input id="precio" type="text" name="precio" value="<?= $producto['precio'] ?>">
        </p>

        <p>
            <input type="hidden" name="idproducto" value="<?= $idproducto ?>">
            <input type="submit" value="Modificar">
        </p>
    </form>
</body>
</html>